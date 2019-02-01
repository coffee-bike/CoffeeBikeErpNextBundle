<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-31
 * Time: 09:23
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait CommissionRateTrait
{
    /**
     * @var float
     */
    protected $commission_rate;

    /**
     * @return float
     */
    public function getCommissionRate(): float
    {
        return $this->commission_rate;
    }

    /**
     * @param float $commission_rate
     */
    public function setCommissionRate(float $commission_rate): void
    {
        $this->commission_rate = $commission_rate;
    }

}