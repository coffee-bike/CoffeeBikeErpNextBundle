<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-31
 * Time: 09:18
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait AdditionalDiscountPercentageTrait
{
    /**
     * @var float
     */
    protected $additional_discount_percentage;

    /**
     * @return float
     */
    public function getAdditionalDiscountPercentage(): float
    {
        return $this->additional_discount_percentage;
    }

    /**
     * @param float $additional_discount_percentage
     */
    public function setAdditionalDiscountPercentage(float $additional_discount_percentage): void
    {
        $this->additional_discount_percentage = $additional_discount_percentage;
    }

}