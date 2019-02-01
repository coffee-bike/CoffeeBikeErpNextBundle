<?php

namespace CoffeeBike\ErpNextBundle\Object;

use CoffeeBike\ErpNextBundle\Object\Fields\NameTrait;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
abstract class AbstractObject
{
    use NameTrait;

    const WRITE_PROTECTED_FIELDS = [];

    /**
     * @var array
     */
    protected $unmappedFields;

    /**
     * @var AbstractObject
     */
    protected $originalState;

    /**
     * @param string|null $name
     */
    public function __construct(string $name = null)
    {
        $this->name = $name;
        $this->unmappedFields = [];
    }

    abstract public function getSubObjectClass(string $property);

    /**
     * @return string
     */
    abstract public function getResourceName(): string;

    /**
     * @return array
     */
    abstract public function getWriteProtectedFields(): array;

    /**
     * @param array $writeProtectedFields
     *
     * @return array
     */
    public function toArray(array $writeProtectedFields): array
    {
        $array = [];
        foreach ($this as $property => $value) {
            if (true === in_array($property, $writeProtectedFields)) {
                continue;
            }

            if (null !== $this->originalState) {
                $originalStateProperty = $this->originalState->$property;
                if ($value === $originalStateProperty) {
                    continue;
                }
            }

            if (is_array($value) && $property != 'unmappedFields') {
                $subObjects = [];
                /** @var AbstractObject $object */
                foreach ($value as $object) {
                    $subObjects[] = $object->toArray($object->getWriteProtectedFields());
                }

                $value = $subObjects;
            }

            if ('unmappedFields' === $property) {
                foreach ($value as $unmappedProperty => $unmappedValue) {
                    if (true === in_array($unmappedProperty, $writeProtectedFields)) {
                        continue;
                    }

                    $originalUnmappedStateProperty = $this->originalState->getUnmappedField($unmappedProperty);
                    if ($unmappedValue === $originalUnmappedStateProperty) {
                        continue;
                    }

                    $array[$unmappedProperty] = $unmappedValue;
                }
            } else {
                $array[$property] = $value;
            }
        }

        unset($array['originalState']);

        return $array;
    }

    /**
     * @return array
     */
    public function getUnmappedFields(): array
    {
        return $this->unmappedFields;
    }

    /**
     * @param array $unmappedFields
     */
    public function setUnmappedFields(array $unmappedFields): void
    {
        $this->unmappedFields = $unmappedFields;
    }

    /**
     * @param string $unmappedField
     * @param mixed  $value
     */
    public function setUnmappedField(string $unmappedField, $value): void
    {
        $this->unmappedFields[$unmappedField] = $value;
    }

    /**
     * @param string $unmappedField
     *
     * @return mixed|null
     */
    public function getUnmappedField(string $unmappedField)
    {
        return true === isset($this->unmappedFields[$unmappedField]) ? $this->unmappedFields[$unmappedField] : null;
    }

    /**
     * @param AbstractObject $originalState
     */
    public function setOriginalState(AbstractObject $originalState): void
    {
        $this->originalState = $originalState;
    }

    /**
     * @return AbstractObject
     */
    public function getOriginalState(): ?AbstractObject
    {
        return $this->originalState;
    }
}
