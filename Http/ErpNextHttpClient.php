<?php

namespace CoffeeBike\ErpNextBundle\Http;

use CoffeeBike\ErpNextBundle\Authentication\AuthenticationManager;
use CoffeeBike\ErpNextBundle\Exception\AuthenticationException;
use CoffeeBike\ErpNextBundle\Exception\BadRequestException;
use CoffeeBike\ErpNextBundle\Exception\ObjectNotFoundException;
use CoffeeBike\ErpNextBundle\Object\AbstractObject;
use CoffeeBike\ErpNextBundle\Object\OrderItem;
use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\RequestOptions;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class ErpNextHttpClient
{
    /**
     * @var AuthenticationManager
     */
    private $authenticationManager;

    /**
     * @var string
     */
    private $host;

    /**
     * @var Client
     */
    private $httpClient;

    /**
     * @param AuthenticationManager $authenticationManager
     * @param string $host
     */
    public function __construct(AuthenticationManager $authenticationManager, string $host)
    {
        $this->authenticationManager = $authenticationManager;
        $this->host = $host;
        $this->httpClient = new Client();
    }

    /**
     * @param string         $method
     * @param AbstractObject $object
     *
     * @return object|array
     *
     * @throws AuthenticationException
     */
    public function request(string $method, AbstractObject $object, array $filters = null)
    {
        $session = $this->authenticationManager->authenticate();
        $url = sprintf('%s/api/resource/%s', $this->host, $object->getResourceName());

        if (null !== $object->getName() && Request::METHOD_GET === $method) {
            $url = sprintf('%s/%s', $url, $object->getName());
        }

        if (isset($filters) && Request::METHOD_GET === $method) {
            $url = sprintf('%s?filters=%s', $url, json_encode($this->filtersToArray($filters)));
        }

        $options = [
            RequestOptions::HEADERS => [
                'Accept' => 'application/json',
            ],
            RequestOptions::COOKIES => CookieJar::fromArray([
                'sid' => $session->getId(),
            ], str_replace(['http://', 'https://'], '', $this->host)),
        ];

        if (in_array($method, [Request::METHOD_PUT, Request::METHOD_POST])) {
            $options[RequestOptions::HEADERS]['Content-Type'] = 'application/json';
            $options[RequestOptions::JSON] = $object->toArray($object->getWriteProtectedFields());
        }
        dump(json_encode($object->toArray($object->getWriteProtectedFields())));
        try {
            return json_decode($this->httpClient->request($method, $url, $options)->getBody()->getContents())->data;
        } catch (ClientException $exception) {
            switch ($exception->getCode()) {
                case 404: throw ObjectNotFoundException::fromAbstractObject($object);
                case 400: throw BadRequestException::fromResponse($exception->getResponse());
                default: throw $exception;
            }
        }
    }

    /**
     * @param array $filters
     *
     * @return array
     */
    public function filtersToArray(array $filters)
    {
        $filtersArray = [];

        /** @var Filter $filter */
        foreach ($filters as $filter) {
            $filtersArray[] = $filter->toArray();
        }

        return $filtersArray;
    }
}
