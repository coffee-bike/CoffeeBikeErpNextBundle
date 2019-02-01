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


use CoffeeBike\ErpNextBundle\Object\Item;

trait ItemsTrait
{
    /**
     * @var array
     */
    protected $items;

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item $item
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

}