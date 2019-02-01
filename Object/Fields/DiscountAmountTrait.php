<?php
/**
 * Created by IntelliJ IDEA.
 * User: dambacher
 * Date: 2019-01-30
 * Time: 13:57
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait DiscountAmountTrait
{
    /**
     * @var float
     */
    protected $discount_amount;

    /**
     * @return float
     */
    public function getDiscountAmount(): float
    {
        return $this->discount_amount;
    }

    /**
     * @param float $discount_amount
     */
    public function setDiscountAmount(float $discount_amount): void
    {
        $this->discount_amount = $discount_amount;
    }


}