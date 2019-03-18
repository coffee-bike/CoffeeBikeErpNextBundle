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


trait ItemDefaultsTrait
{
    /**
     * @var array
     */
    protected $item_defaults;

    /**
     * @return array
     */
    public function getItemDefaults(): array
    {
        return $this->item_defaults;
    }

    /**
     * @param array $item_defaults
     */
    public function setItemDefaults(array $item_defaults): void
    {
        $this->item_defaults = $item_defaults;
    }
}