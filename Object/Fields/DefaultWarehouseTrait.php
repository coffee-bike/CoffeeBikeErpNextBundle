<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-31
 * Time: 14:04
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;

trait DefaultWarehouseTrait
{
    /**
     * @var string
     */
    protected $default_warehouse;

    /**
     * @return string
     */
    public function getDefaultWarehouse(): string
    {
        return $this->default_warehouse;
    }

    /**
     * @param string $default_warehouse
     */
    public function setDefaultWarehouse(string $default_warehouse): void
    {
        $this->default_warehouse = $default_warehouse;
    }

}