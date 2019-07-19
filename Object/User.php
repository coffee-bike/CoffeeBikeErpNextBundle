<?php

namespace CoffeeBike\ErpNextBundle\Object;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class User extends AbstractObject
{
    /**
     * {@inheritdoc}
     */
    public function getResourceName(): string
    {
        return 'User';
    }

    /**
     * {@inheritdoc}
     */
    public function getWriteProtectedFields(): array
    {
        return parent::WRITE_PROTECTED_FIELDS;
    }

    public function getSubObjectClass(string $property)
    {
        return null;
    }
}