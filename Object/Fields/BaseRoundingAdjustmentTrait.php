<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-30
 * Time: 14:17
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait BaseRoundingAdjustmentTrait
{
    /**
     * @var float
     */
    protected $base_rounding_adjustment;

    /**
     * @return float
     */
    public function getBaseRoundingAdjustment(): float
    {
        return $this->base_rounding_adjustment;
    }

    /**
     * @param float $base_rounding_adjustment
     */
    public function setBaseRoundingAdjustment(float $base_rounding_adjustment): void
    {
        $this->base_rounding_adjustment = $base_rounding_adjustment;
    }

}