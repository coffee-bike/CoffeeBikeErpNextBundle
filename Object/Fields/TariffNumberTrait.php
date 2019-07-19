<?php

namespace CoffeeBike\ErpNextBundle\Object\Fields;        

trait TariffNumberTrait
{

    /**
     * @var string
     */
    protected $tariff_number;

    /**
     * @return string
     */
    public function getTariffNumber(): string
    {
        return $this->tariff_number;
    }     

    /**
     * @param string $tariff_number
     */
    public function setTariffNumber(string $tariff_number): void
    {
        $this->tariff_number = $tariff_number;
    }
}