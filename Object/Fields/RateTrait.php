<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-03-07
 * Time: 08:55
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait RateTrait
{
    /**
     * @var float
     */
    protected $rate;

    /**
     * @return float
     */
    public function getRate(): float
    {
        return $this->rate;
    }

    /**
     * @param float $rate
     */
    public function setRate(float $rate): void
    {
        $this->rate = $rate;
    }

}