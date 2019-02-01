<?php
/**
 * Created by IntelliJ IDEA.
 * User: dambacher
 * Date: 2019-01-30
 * Time: 13:48
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait IgnorePricingRuleTrait
{
    /**
     * @var boolean
     */
    protected $ignore_pricing_rule;

    /**
     * @return bool
     */
    public function isIgnorePricingRule(): bool
    {
        return $this->ignore_pricing_rule;
    }

    /**
     * @param bool $ignore_pricing_rule
     */
    public function setIgnorePricingRule(bool $ignore_pricing_rule): void
    {
        $this->ignore_pricing_rule = $ignore_pricing_rule;
    }


}