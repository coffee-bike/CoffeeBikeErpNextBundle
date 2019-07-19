<?php

namespace CoffeeBike\ErpNextBundle\Object\Fields;        

trait DescriptionTrait
{

    /**
     * @var string
     */
    protected $description;

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }     

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        if (strlen($description) <= 140) {
            $this->description = $description;
        } else {
            $this->description = substr($description, 0, 134) . '...';
        }
    }
}