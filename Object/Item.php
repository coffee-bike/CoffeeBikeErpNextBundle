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


use CoffeeBike\ErpNextBundle\DefaultMaterialRequestTypeTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\BaseUnitMeasureTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\CustomFields\AccountCategoryTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\CustomFields\IsVariantOfTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\CustomsTariffNumberTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\DisabledTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\ItemCodeTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\ItemDefaultsTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\ItemGroupTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\ItemNameTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\NoticeTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\SafetyStockTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\WeightTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\ProductTypeTrait;

class Item extends AbstractObject
{
    /*
     * Traits
     */
    use ItemNameTrait;
    use ItemCodeTrait;
    use ItemGroupTrait;
    use ItemDefaultsTrait;
    use ProductTypeTrait;
    use BaseUnitMeasureTrait;
    use WeightTrait;
    use DisabledTrait;
    use SafetyStockTrait;
    use DefaultMaterialRequestTypeTrait;
    use AccountCategoryTrait;
    use IsVariantOfTrait;
    use CustomsTariffNumberTrait;
    use NoticeTrait;


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
        return 'Item';
    }

    /**
     * @return array
     */
    public function getWriteProtectedFields(): array
    {
        return [];
    }
}