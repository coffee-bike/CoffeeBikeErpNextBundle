<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-03-18
 * Time: 17:04
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields\CustomFields;


trait IsVariantOfTrait
{
    /**
     * @var string
     */
    protected $is_variant_of;

    /**
     * @return string
     */
    public function getisVariantOf(): string
    {
        return $this->is_variant_of;
    }

    /**
     * @param string $is_variant_of
     */
    public function setIsVariantOf(string $is_variant_of): void
    {
        $this->is_variant_of = $is_variant_of;
    }

}