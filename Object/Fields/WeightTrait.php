<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-03-18
 * Time: 15:44
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait WeightTrait
{
    /**
     * @var float
     */
    protected $net_weight_per_unit;
    /**
     * @var float
     */
    protected $weight_per_unit;
    /**
     * @var string
     */
    protected $weight_uom;

    /**
     * @return float
     */
    public function getNetWeightPerUnit(): float
    {
        return $this->net_weight_per_unit;
    }

    /**
     * @param float $net_weight_per_unit
     */
    public function setNetWeightPerUnit(float $net_weight_per_unit): void
    {
        $this->net_weight_per_unit = $net_weight_per_unit;
    }

    /**
     * @return float
     */
    public function getWeightPerUnit(): float
    {
        return $this->weight_per_unit;
    }

    /**
     * @param float $weight_per_unit
     */
    public function setWeightPerUnit(float $weight_per_unit): void
    {
        $this->weight_per_unit = $weight_per_unit;
    }

    /**
     * @return string
     */
    public function getWeightUom(): string
    {
        return $this->weight_uom;
    }

    /**
     * @param string $weight_uom
     */
    public function setWeightUom(string $weight_uom): void
    {
        $this->weight_uom = $weight_uom;
    }

}