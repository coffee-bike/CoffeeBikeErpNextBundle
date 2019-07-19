<?php

namespace CoffeeBike\ErpNextBundle\Object\Fields;        

trait TargetNameTrait
{

    /**
     * @var string
     */
    protected $target_name;

    /**
     * @return string
     */
    public function getTargetName(): string
    {
        return $this->target_name;
    }     

    /**
     * @param string $target_name
     */
    public function setTargetName(string $target_name): void
    {
        $this->target_name = $target_name;
    }
}