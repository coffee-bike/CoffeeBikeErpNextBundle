<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-03-19
 * Time: 10:57
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object;


use CoffeeBike\ErpNextBundle\Object\Fields\DescriptionTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\TariffNumberTrait;

class CustomsTariffNumber extends AbstractObject
{
    use TariffNumberTrait;
    use DescriptionTrait;

    public function getSubObjectClass(string $property)
    {
        return null;
    }

    /**
     * @return string
     */
    public function getResourceName(): string
    {
        return 'Customs Tariff Number';
    }

    /**
     * @return array
     */
    public function getWriteProtectedFields(): array
    {
        return [];
    }
}