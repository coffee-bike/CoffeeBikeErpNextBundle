<?php

namespace CoffeeBike\ErpNextBundle\Http;

/**
 * @author Felix Knopp <felix.knopp@coffee-bike.com>
 */
class Filter
{
    /**
     * @var string
     */
    private $resourceName;

    /**
     * @var string
     */
    private $field;

    /**
     * @var string
     */
    private $operator;

    /**
     * @var string
     */
    private $value;

    /**
     * @param string $field
     * @param string $operator
     * @param string $value
     */
    public function __construct(string $resourceName, string $field, string $operator, string $value)
    {
        $this->resourceName = $resourceName;
        $this->field = $field;
        $this->operator = $operator;
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getResourceName(): string
    {
        return $this->resourceName;
    }


    /**
     * @return string
     */
    public function getField(): string
    {
        return $this->field;
    }

    /**
     * @return string
     */
    public function getOperator(): string
    {
        return $this->operator;
    }

    /**
     * @return string
     */
    public function getValue(): string
    {
        return sprintf("'%s'", $this->value);
    }

    /**
     * @param string $field
     * @param string $value
     *
     * @return Filter
     */
    public static function equals(string $field, string $value): self
    {
        return new static($field, '=', $value);
    }

    /**
     * @param string $field
     * @param string $value
     *
     * @return Filter
     */
    public static function notEquals(string $field, string $value): self
    {
        return new static($field, '!=', $value);
    }

    public function toArray(): array
    {
        return array(
            $this->resourceName,
            $this->field,
            $this->operator,
            $this->value,
        );
        //return sprintf("'%s','%s','%s','%s'", $this->resourceName, $this->field, $this->operator, $this->value);
    }
}
