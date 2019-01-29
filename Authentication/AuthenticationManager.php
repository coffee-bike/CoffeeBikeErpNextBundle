<?php

namespace CoffeeBike\ErpNextBundle\Authentication;

use CoffeeBike\ErpNextBundle\Exception\AuthenticationException;
use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use GuzzleHttp\RequestOptions;
use Symfony\Component\Cache\Simple\FilesystemCache;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class AuthenticationManager
{
    const SESSION_CACHE = 'coffeebike_erp.session';

    const AUTHENTICATION_URL = '/api/method/login';

    /**
     * @var FilesystemCache
     */
    private $cache;

    /**
     * @var Credentials
     */
    private $credentials;

    /**
     * @var string
     */
    private $host;

    /**
     * @var Client
     */
    private $httpClient;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * @param Credentials $credentials
     * @param string $host
     */
    public function __construct(Credentials $credentials, string $host)
    {
        $this->cache = new FilesystemCache();
        $this->credentials = $credentials;
        $this->host = $host;
        $this->httpClient = new Client();
        $this->serializer = new Serializer([new ObjectNormalizer()], [new JsonEncoder()]);
    }

    /**
     * Returns a Session that is used for authorization
     * at the ERP REST API.
     *
     * @return Session
     *
     * @throws AuthenticationException
     */
    public function authenticate(): Session
    {
        $session = $this->cache->get(self::SESSION_CACHE);
        if (null === $session) {
            $session = $this->refresh();
        } else {
            /** @var Session $session */
            $session = $this->serializer->deserialize($session, Session::class, 'json');
            if (true === $session->isExpired()) {
                $session = $this->refresh();
            }
        }

        $this->cache->set(self::SESSION_CACHE, $this->serializer->serialize($session, 'json'));

        return $session;
    }

    /**
     * Returns a new Session.
     *
     * @return Session
     *
     * @throws AuthenticationException
     */
    private function refresh(): Session
    {
        try {
            $cookieJar = new CookieJar();
            $response = $this->httpClient->post($this->host.self::AUTHENTICATION_URL, [
                RequestOptions::HEADERS => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json',
                ],
                RequestOptions::JSON => [
                    'usr' => $this->credentials->getUsername(),
                    'pwd' => $this->credentials->getPassword(),
                ],
                RequestOptions::COOKIES => $cookieJar,
            ]);

            if (200 !== $response->getStatusCode()) {
                throw new \Exception('Invalid credentials');
            }

            $cookie = $cookieJar->getCookieByName('sid');
            if (null === $cookie) {
                throw new \Exception('Cookie could not be fetched from response.');
            }

            return new Session($cookie->getValue(), date('c'));
        } catch (\Exception $e) {
            throw AuthenticationException::fromException($e);
        }
    }
}
