<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-30
 * Time: 14:18
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait DeliveryDateTrait
{
    /**
     * @var string
     */
    protected $delivery_date;

    /**
     * @return \DateTime
     * @throws \Exception
     */
    public function getDeliveryDate(): \DateTime
    {
        return new \DateTime($this->delivery_date);
    }

    /**
     * @param string $delivery_date
     */
    public function setDeliveryDate(string $delivery_date): void
    {
        $this->delivery_date = $delivery_date;
    }

}