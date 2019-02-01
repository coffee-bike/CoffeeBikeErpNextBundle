<?php

namespace CoffeeBike\ErpNextBundle\Object;

use Symfony\Component\PropertyAccess\PropertyAccess;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
trait AbstractObjectMapperTrait
{
    /**
     * Compares the plain object and populates the AbstractObject.
     *
     * @param \stdClass      $data
     * @param AbstractObject $object
     */
    private function mapToObject(\stdClass $data, AbstractObject $object): void
    {
        $propertyAccessor = PropertyAccess::createPropertyAccessor();


        $unmappedFields = [];
        foreach ($data as $property => $value) {
            if (true === property_exists($object, $property)) {
                $subObjectClass = $object->getSubObjectClass($property);
                if ($subObjectClass != null) {
                    $subObject = new $subObjectClass;
                    self::mapToObject((object) $value, $subObject);
                }
                $propertyAccessor->setValue($object, $property, $value);
            } else {
                $unmappedFields[$property] = $value;
            }
        }
        $originalState = clone $object;

        $propertyAccessor->setValue($object, 'unmappedFields', $unmappedFields);
        $propertyAccessor->setValue($originalState, 'unmappedFields', $unmappedFields);

        $propertyAccessor->setValue($object, 'originalState', $originalState);
    }
}
