<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-31
 * Time: 14:09
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object;


use CoffeeBike\ErpNextBundle\Object\Fields\ConversionFactorTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\ItemCodeTrait;

class Item extends AbstractObject
{
    use ConversionFactorTrait;
    use ItemCodeTrait;

    public function getSubObjectClass(string $property)
    {
        return null;
    }

    /**
     * @return string
     */
    public function getResourceName(): string
    {
        // TODO: Implement getResourceName() method.
        return 'Sales Order Item';
    }

    /**
     * @return array
     */
    public function getWriteProtectedFields(): array
    {
        return [];
    }
}