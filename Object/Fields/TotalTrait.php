<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-31
 * Time: 09:22
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait TotalTrait
{
    /**
     * @var float
     */
    protected $total;

    /**
     * @return float
     */
    public function getTotal(): float
    {
        return $this->total;
    }

    /**
     * @param float $total
     */
    public function setTotal(float $total): void
    {
        $this->total = $total;
    }

}