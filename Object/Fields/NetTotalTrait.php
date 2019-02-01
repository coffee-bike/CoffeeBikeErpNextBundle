<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-30
 * Time: 14:21
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait NetTotalTrait
{
    /**
     * @var float
     */
    protected $net_total;

    /**
     * @return float
     */
    public function getNetTotal(): float
    {
        return $this->net_total;
    }

    /**
     * @param float $net_total
     */
    public function setNetTotal(float $net_total): void
    {
        $this->net_total = $net_total;
    }

}