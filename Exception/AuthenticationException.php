<?php

namespace CoffeeBike\ErpNextBundle\Exception;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class AuthenticationException extends ErpNextException
{
    /**
     * @param \Exception $e
     *
     * @return AuthenticationException
     */
    public static function fromException(\Exception $e): self
    {
        return new static(
            sprintf('An error occurred during authentication: %s', $e->getMessage()),
            $e->getCode()
        );
    }
}
