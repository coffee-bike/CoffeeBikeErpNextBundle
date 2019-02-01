<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-30
 * Time: 14:03
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait BaseGrandTotalTrait
{
    /**
     * @var float
     */
    protected $base_grand_total;

    /**
     * @return float
     */
    public function getBaseGrandTotal(): float
    {
        return $this->base_grand_total;
    }

    /**
     * @param float $base_grand_total
     */
    public function setBaseGrandTotal(float $base_grand_total): void
    {
        $this->base_grand_total = $base_grand_total;
    }


}