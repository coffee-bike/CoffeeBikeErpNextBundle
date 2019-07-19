<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-03-18
 * Time: 15:37
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object;


use CoffeeBike\ErpNextBundle\Object\Fields\TaxTypeTrait;

class Tax extends AbstractObject
{
    use TaxTypeTrait;

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
        return 'Taxes';
    }

    /**
     * @return array
     */
    public function getWriteProtectedFields(): array
    {
        return [];
    }
}