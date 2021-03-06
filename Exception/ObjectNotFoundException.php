<?php

namespace CoffeeBike\ErpNextBundle\Exception;

use CoffeeBike\ErpNextBundle\Object\AbstractObject;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class ObjectNotFoundException extends ErpNextException
{
    /**
     * @param AbstractObject $object
     *
     * @return ObjectNotFoundException
     */
    public static function fromAbstractObject(AbstractObject $object): self
    {
        return new static(
            sprintf('The requested object "%s" with the id "%s" does not exist.', $object->getResourceName(), $object->getName()),
            404
        );
    }
}
