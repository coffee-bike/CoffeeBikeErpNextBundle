<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-02-01
 * Time: 14:54
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait ItemNameTrait
{
    /**
     * @var string
     */
    protected $item_name;

    /**
     * @return string
     */
    public function getItemName(): string
    {
        return $this->item_name;
    }

    /**
     * @param string $item_name
     */
    public function setItemName(string $item_name): void
    {
        $this->item_name = $item_name;
    }

}