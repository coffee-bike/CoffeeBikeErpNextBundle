<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-03-18
 * Time: 15:19
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait BaseUnitMeasureTrait
{
    /**
     * @var string
     */
    protected $base_unit_measure;

    /**
     * @return string
     */
    public function getBaseUnitMeasure(): string
    {
        return $this->base_unit_measure;
    }

    /**
     * @param string $base_unit_measure
     */
    public function setBaseUnitMeasure(string $base_unit_measure): void
    {
        $this->base_unit_measure = $base_unit_measure;
    }

}