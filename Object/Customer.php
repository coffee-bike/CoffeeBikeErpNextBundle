<?php
/**
 * Created by IntelliJ IDEA.
 * User: dambacher
 * Date: 2019-01-29
 * Time: 14:03
 */

namespace CoffeeBike\ErpNextBundle\Object;


use CoffeeBike\ErpNextBundle\Object\Fields\CustomerNameTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\CustomerNoTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\PaymentTermsTrait;


class Customer extends AbstractObject
{

    use CustomerNoTrait;
    use CustomerNameTrait;
    use PaymentTermsTrait;

    public function getSubObjectClass(string $property)
    {
        return null;
    }

    public function getResourceName(): string
    {
        return 'Customer';
    }

    public function getWriteProtectedFields(): array
    {
        // TODO: Implement getWriteProtectedFields() method.
        return [];
    }

}