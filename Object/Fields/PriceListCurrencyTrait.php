<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-30
 * Time: 14:22
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait PriceListCurrencyTrait
{
    /**
     * @var string
     */
    protected $price_list_currency;

    /**
     * @return string
     */
    public function getPriceListCurrency(): string
    {
        return $this->price_list_currency;
    }

    /**
     * @param string $price_list_currency
     */
    public function setPriceListCurrency(string $price_list_currency): void
    {
        $this->price_list_currency = $price_list_currency;
    }

}