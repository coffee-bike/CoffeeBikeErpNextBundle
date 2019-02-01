<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-30
 * Time: 14:46
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait ShippingAddressNameTrait
{
    /**
     * @var string
     */
    protected $shipping_address_name;

    /**
     * @return string
     */
    public function getShippingAddressName(): string
    {
        return $this->shipping_address_name;
    }

    /**
     * @param string $shipping_address_name
     */
    public function setShippingAddressName(string $shipping_address_name): void
    {
        $this->shipping_address_name = $shipping_address_name;
    }

}