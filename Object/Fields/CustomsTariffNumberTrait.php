<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-03-19
 * Time: 16:43
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;

trait CustomsTariffNumberTrait
{
    /**
     * @var string
     */
    protected $customs_tariff_number;

    /**
     * @return string
     */
    public function getCustomsTariffNumber(): string
    {
        return $this->customs_tariff_number;
    }

    /**
     * @param string $customs_tariff_number
     */
    public function setCustomsTariffNumber(string $customs_tariff_number): void
    {
        $this->customs_tariff_number = $customs_tariff_number;
    }

}