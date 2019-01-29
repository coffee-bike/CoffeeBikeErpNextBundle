<?php

namespace CoffeeBike\ErpNextBundle\Exception;

use Psr\Http\Message\ResponseInterface;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class BadRequestException extends ErpNextException
{
    /**
     * @param ResponseInterface $response
     *
     * @return BadRequestException
     */
    public static function fromResponse(ResponseInterface $response): self
    {
        return new static(
            $response->getBody()->getContents(),
            400
        );
    }
}
