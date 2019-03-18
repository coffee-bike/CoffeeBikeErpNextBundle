<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-03-07
 * Time: 08:51
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait QuantityTrait
{
    /**
     * @var float
     */
    protected $qty;

    /**
     * @return float
     */
    public function getQty(): float
    {
        return $this->qty;
    }

    /**
     * @param float $qty
     */
    public function setQty(float $qty): void
    {
        $this->qty = $qty;
    }

}