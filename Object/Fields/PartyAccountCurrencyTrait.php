<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-30
 * Time: 14:20
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait PartyAccountCurrencyTrait
{
    /**
     * @var string
     */
    protected $party_account_currency;

    /**
     * @return string
     */
    public function getPartyAccountCurrency(): string
    {
        return $this->party_account_currency;
    }

    /**
     * @param string $party_account_currency
     */
    public function setPartyAccountCurrency(string $party_account_currency): void
    {
        $this->party_account_currency = $party_account_currency;
    }

}