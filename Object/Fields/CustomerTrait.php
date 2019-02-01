<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-31
 * Time: 11:12
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait CustomerTrait
{
    /**
     * @var string
     */
    protected $customer;

    /**
     * @return string
     */
    public function getCustomer(): string
    {
        return $this->customer;
    }

    /**
     * @param string $customer
     */
    public function setCustomer(string $customer): void
    {
        $this->customer = $customer;
    }

}