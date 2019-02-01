<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-02-01
 * Time: 10:29
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait LastPurchaseRateTrait
{
    /**
     * @var float
     */
    protected $last_purchase_rate;

    /**
     * @return float
     */
    public function getLastPurchaseRate(): float
    {
        return $this->last_purchase_rate;
    }

    /**
     * @param float $last_purchase_rate
     */
    public function setLastPurchaseRate(float $last_purchase_rate): void
    {
        $this->last_purchase_rate = $last_purchase_rate;
    }

}