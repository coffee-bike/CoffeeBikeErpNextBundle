<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-30
 * Time: 14:28
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait TotalCommissionTrait
{
    /**
     * @var float
     */
    protected $total_commission;

    /**
     * @return float
     */
    public function getTotalCommission(): float
    {
        return $this->total_commission;
    }

    /**
     * @param float $total_commission
     */
    public function setTotalCommission(float $total_commission): void
    {
        $this->total_commission = $total_commission;
    }

}