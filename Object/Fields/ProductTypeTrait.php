<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-03-18
 * Time: 12:24
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait ProductTypeTrait
{
    /**
     * @var string
     */
    protected $product_type;

    /**
     * @return string
     */
    public function getProductType(): string
    {
        return $this->product_type;
    }

    /**
     * @param string $product_type
     */
    public function setProductType(string $product_type): void
    {
        $this->product_type = $product_type;
    }

}