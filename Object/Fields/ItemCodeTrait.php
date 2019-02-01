<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-02-01
 * Time: 10:32
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait ItemCodeTrait
{
    /**
     * @var string
     */
    protected $item_code;

    /**
     * @return string
     */
    public function getItemCode(): string
    {
        return $this->item_code;
    }

    /**
     * @param string $item_code
     */
    public function setItemCode(string $item_code): void
    {
        $this->item_code = $item_code;
    }

}