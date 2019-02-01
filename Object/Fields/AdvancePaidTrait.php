<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-30
 * Time: 14:23
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait AdvancePaidTrait
{
    /**
     * @var float
     */
    protected $advance_paid;

    /**
     * @return float
     */
    public function getAdvancePaid(): float
    {
        return $this->advance_paid;
    }

    /**
     * @param float $advance_paid
     */
    public function setAdvancePaid(float $advance_paid): void
    {
        $this->advance_paid = $advance_paid;
    }

}