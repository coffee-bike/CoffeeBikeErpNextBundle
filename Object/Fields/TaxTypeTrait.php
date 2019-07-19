<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-03-18
 * Time: 15:38
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait TaxTypeTrait
{
    /**
     * @var string
     */
    protected $tax_type;

    /**
     * @return string
     */
    public function getTaxType(): string
    {
        return $this->tax_type;
    }

    /**
     * @param string $tax_type
     */
    public function setTaxType(string $tax_type): void
    {
        $this->tax_type = $tax_type;
    }

}