<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-02-01
 * Time: 15:14
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait ItemGroupTrait
{
    /**
     * @var string
     */
    protected $item_group;

    /**
     * @return string
     */
    public function getItemGroup(): string
    {
        return $this->item_group;
    }

    /**
     * @param string $item_group
     */
    public function setItemGroup(string $item_group): void
    {
        $this->item_group = $item_group;
    }

}