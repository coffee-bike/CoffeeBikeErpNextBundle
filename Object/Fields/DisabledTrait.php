<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-03-18
 * Time: 16:23
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait DisabledTrait
{
    /**
     * @var boolean
     */
    protected $disabled;

    /**
     * @return bool
     */
    public function isDisabled(): bool
    {
        return $this->disabled;
    }

    /**
     * @param bool $disabled
     */
    public function setDisabled(bool $disabled): void
    {
        $this->disabled = $disabled;
    }

}