<?php
/**
 * Created by IntelliJ IDEA.
 * User: dambacher
 * Date: 2019-01-30
 * Time: 11:47
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait BillingStatusTrait
{
    static $notBilled = 'Not Billed';
    static $fullyBilled = 'Fully Billed';
    static $partlyBilled = 'Partly Billed';
    static $closed = 'Closed';

    /**
     * @var string
     */
    protected $billing_status;

    /**
     * @return string
     */
    public function getBillingStatus(): string
    {
        return $this->billing_status;
    }


    /**
     * @param string $billing_status
     */
    public function setBillingStatus($billing_status): void
    {
        $this->billing_status = $billing_status;
    }

    /**
     * @return bool
     */
    public function isNotBilled(): bool
    {
        return $this->getBillingStatus() == self::$notBilled;
    }

    /**
     * @return bool
     */
    public function isFullyBilled(): bool
    {
        return $this->getBillingStatus() == self::$fullyBilled;
    }

    /**
     * @return bool
     */
    public function isPartlyBilled(): bool
    {
        return $this->getBillingStatus() == self::$partlyBilled;
    }

    /**
     * @return bool
     */
    public function isBillingClosed(): bool
    {
        return $this->getBillingStatus() == self::isBillingClosed();
    }

}