<?php
/**
 * Created by IntelliJ IDEA.
 * User: dambacher
 * Date: 2019-01-29
 * Time: 14:03
 */

namespace CoffeeBike\ErpNextBundle\Object;

use CoffeeBike\ErpNextBundle\Object\Fields\AdditionalDiscountPercentageTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\AdvancePaidTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\ApplyDiscountOnTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\BaseDiscountAmountTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\BaseGrandTotalTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\BaseInWordsTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\BaseNetTotalTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\BaseRoundingAdjustmentTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\BaseTotalTaxesAndChargesTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\BaseTotalTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\BillingStatusTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\CommissionRateTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\ConversionRateTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\CustomerNameTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\CustomerTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\DeliveryDateTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\DeliveryStatusTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\DiscountAmountTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\DocTypeTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\IgnorePricingRuleTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\InWordsTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\ItemsTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\LanguageTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\NameTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\NetTotalTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\ObjectDateTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\OwnerTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\PartyAccountCurrencyTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\PriceListCurrencyTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\RoundedTotalTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\ShippingAddressNameTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\TermsTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\TerritoryTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\TitleTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\TotalCommissionTrait;
use CoffeeBike\ErpNextBundle\Object\Fields\TotalTrait;

class Order extends AbstractObject
{
    use DocTypeTrait;
    use NameTrait;
    use ObjectDateTrait;
    use CustomerTrait;

    use AdditionalDiscountPercentageTrait;
    use AdvancePaidTrait;
    use ApplyDiscountOnTrait;
    use BaseDiscountAmountTrait;
    use BaseGrandTotalTrait;
    use BaseInWordsTrait;
    use BaseNetTotalTrait;
    use BaseRoundingAdjustmentTrait;
    use BaseTotalTaxesAndChargesTrait;
    use BaseTotalTrait;
    use BillingStatusTrait;
    use CommissionRateTrait;
    use ConversionRateTrait;
    use CustomerNameTrait;
    use DeliveryDateTrait;
    use DeliveryStatusTrait;
    use DiscountAmountTrait;
    use IgnorePricingRuleTrait;
    use InWordsTrait;
    use ItemsTrait;
    use LanguageTrait;
    use NetTotalTrait;
    use OwnerTrait;
    use PartyAccountCurrencyTrait;
    use PriceListCurrencyTrait;
    use RoundedTotalTrait;
    use ShippingAddressNameTrait;
    use TermsTrait;
    use TerritoryTrait;
    use TitleTrait;
    use TotalCommissionTrait;
    use TotalTrait;

    public function getSubObjectClass(string $property)
    {
        // TODO: Implement getSubObjects() method.
        if ($property == 'items') {
            return Item::class;
        }
    }


    public function getResourceName(): string
    {
        return 'Sales Order';
    }

    public function getWriteProtectedFields(): array
    {
        // TODO: Implement getWriteProtectedFields() method.
        return [];
    }

}