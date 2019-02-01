<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-31
 * Time: 09:15
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait ApplyDiscountOnTrait
{
    /**
     * @var string
     */
    protected $apply_discount_on;

    /**
     * @return string
     */
    public function getApplyDiscountOn(): string
    {
        return $this->apply_discount_on;
    }

    /**
     * @param mixed $apply_discount_on
     */
    public function setApplyDiscountOn(string $apply_discount_on): void
    {
        $this->apply_discount_on = $apply_discount_on;
    }

}