<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-30
 * Time: 14:46
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait RoundedTotalTrait
{
    /**
     * @var float
     */
    protected $rounded_total;

    /**
     * @return float
     */
    public function getRoundedTotal(): float
    {
        return $this->rounded_total;
    }

    /**
     * @param float $rounded_total
     */
    public function setRoundedTotal(float $rounded_total): void
    {
        $this->rounded_total = $rounded_total;
    }

}