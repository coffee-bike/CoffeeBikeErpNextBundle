<?php
/**
 * Created by IntelliJ IDEA.
 * User: dambacher
 * Date: 2019-01-30
 * Time: 13:51
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait BaseTotalTaxesAndChargesTrait
{
    /**
     * @var float
     */
    protected $base_total_taxes_and_charges;

    /**
     * @return float
     */
    public function getBaseTotalTaxesAndCharges(): float
    {
        return $this->base_total_taxes_and_charges;
    }

    /**
     * @param float $base_total_taxes_and_charges
     */
    public function setBaseTotalTaxesAndCharges(float $base_total_taxes_and_charges): void
    {
        $this->base_total_taxes_and_charges = $base_total_taxes_and_charges;
    }


}