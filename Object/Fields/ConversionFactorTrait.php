<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-02-01
 * Time: 10:33
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait ConversionFactorTrait
{
    /**
     * @var float
     */
    protected $conversion_factor;

    /**
     * @return float
     */
    public function getConversionFactor(): float
    {
        return $this->conversion_factor;
    }

    /**
     * @param float $conversion_factor
     */
    public function setConversionFactor(float $conversion_factor): void
    {
        $this->conversion_factor = $conversion_factor;
    }

}