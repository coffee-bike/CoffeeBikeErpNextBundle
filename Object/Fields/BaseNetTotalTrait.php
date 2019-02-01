<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-30
 * Time: 14:39
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait BaseNetTotalTrait
{
    /**
     * @var float
     */
    protected $base_net_total;

    /**
     * @return float
     */
    public function getBaseNetTotal(): float
    {
        return $this->base_net_total;
    }

    /**
     * @param float $base_net_total
     */
    public function setBaseNetTotal(float $base_net_total): void
    {
        $this->base_net_total = $base_net_total;
    }

}