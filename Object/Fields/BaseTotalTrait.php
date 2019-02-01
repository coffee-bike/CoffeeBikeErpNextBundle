<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-31
 * Time: 09:24
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait BaseTotalTrait
{
    /**
     * @var float
     */
    protected $base_total;

    /**
     * @return float
     */
    public function getBaseTotal(): float
    {
        return $this->base_total;
    }

    /**
     * @param float $base_total
     */
    public function setBaseTotal(float $base_total): void
    {
        $this->base_total = $base_total;
    }

}