<?php
/**
 * Created by IntelliJ IDEA.
 * User: dambacher
 * Date: 15.01.19
 * Time: 14:23
 */

namespace CoffeeBike\ErpNextBundle\Services;

use Circle\RestClientBundle\Services\RestClient;

class ErpNextManager
{
    private $rest;
    private $authenticated = false;
    private $credentials = [
        "url" => null,
        "user" => null,
        "pw" => null,
        "cookie" => null,
    ];

    public function __construct(RestClient $restClient, $url, $user, $pw)
    {
        $this->rest = $restClient;
        $this->credentials['url'] = $url;
        $this->credentials['user'] = $user;
        $this->credentials['pw'] = $pw;

        return $this->auth();
    }

    private function auth()
    {
        if (!$this->authenticated) {
            $payload = [
                'usr' => $this->credentials['user'],
                'pwd' => $this->credentials['pw'],
            ];

            $authHeader = [
                CURLOPT_HTTPHEADER => [
                    'Content-Type: application/json',
                    'Accept: application/json'
                ],
                CURLOPT_HEADER => true,
            ];

            $response = $this->rest->post(
                //$this->credentials['url'] . '/api/method/login',
                'http://10.0.10.13/api/method/login',
                json_encode($payload),
                $authHeader
            );

            if ($response->getStatusCode() == 200) {
                $cookies = $response->headers->getCookies();

                foreach ($cookies as $cookie) {
                    if ($cookie->getName() == 'sid') {
                        $this->credentials['cookie'] = $cookie->getValue();
                        $this->authenticated = true;

                        return true;
                    }
                }
            }

            return false;
        }

        return true;
    }

    public function request($method, $url, $payload = null)
    {
        $header = [
            CURLOPT_HTTPHEADER => [
                'Accept: application/json',
                'Cookie: sid='.$this->credentials['cookie'],
            ],
            CURLOPT_HEADER => true,
        ];

        if ($method == 'GET') {
            $response = $this->rest->get(
                $this->credentials['url'].'/api/resource/'.$url,
                $header
            );

            print_r( $this->credentials['url'].'/api/resource/'.$url);
            print_r(json_decode($response->getContent()));
        }

    }



}