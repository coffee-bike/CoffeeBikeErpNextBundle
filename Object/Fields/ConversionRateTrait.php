<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-31
 * Time: 09:20
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait ConversionRateTrait
{
    /**
     * @var float
     */
    protected $conversion_rate;

    /**
     * @return float
     */
    public function getConversionRate(): float
    {
        return $this->conversion_rate;
    }

    /**
     * @param float $conversion_rate
     */
    public function setConversionRate(float $conversion_rate): void
    {
        $this->conversion_rate = $conversion_rate;
    }

}