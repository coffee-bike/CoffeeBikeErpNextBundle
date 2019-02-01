<?php
/**
 * Created by IntelliJ IDEA.
 * User: dambacher
 * Date: 2019-01-30
 * Time: 13:50
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait BaseDiscountAmountTrait
{
    /**
     * @var float
     */
    protected $base_discount_amount;

    /**
     * @return float
     */
    public function getBaseDiscountAmount(): float
    {
        return $this->base_discount_amount;
    }

    /**
     * @param float $base_discount_amount
     */
    public function setBaseDiscountAmount(float $base_discount_amount): void
    {
        $this->base_discount_amount = $base_discount_amount;
    }


}