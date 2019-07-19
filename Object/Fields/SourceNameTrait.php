<?php

namespace CoffeeBike\ErpNextBundle\Object\Fields;        

trait SourceNameTrait
{

    /**
     * @var string
     */
    protected $source_name;

    /**
     * @return string
     */
    public function getSourceName(): string
    {
        return $this->source_name;
    }     

    /**
     * @param string $source_name
     */
    public function setSourceName(string $source_name): void
    {
        $this->source_name = $source_name;
    }
}