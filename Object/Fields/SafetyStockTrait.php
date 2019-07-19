<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-03-18
 * Time: 16:53
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait SafetyStockTrait
{
    /**
     * @var float
     */
    protected $safety_stock;

    /**
     * @return float
     */
    public function getSafetyStock(): float
    {
        return $this->safety_stock;
    }

    /**
     * @param float $safety_stock
     */
    public function setSafetyStock(float $safety_stock): void
    {
        $this->safety_stock = $safety_stock;
    }

}