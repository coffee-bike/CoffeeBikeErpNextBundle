<?php
/**
 * Created by:
 * User: dambacher
 * Date: 2019-01-30
 * Time: 14:30
 *
 * @author Jonas Dambacher <jonas.dambacher@coffee-bike.com>
 */

namespace CoffeeBike\ErpNextBundle\Object\Fields;


trait DeliveryStatusTrait
{
    static $notDelivered = 'Not Delivered';
    static $fullyDelivered = 'Fully Delivered';
    static $partlyDelivered = 'Partly Delivered';
    static $closed = 'Closed';
    static $notApplicable = 'Not Applicable';

    /**
     * @var string
     */
    protected $delivery_status;

    /**
     * @return string
     */
    public function getDeliveryStatus(): string
    {
        return $this->delivery_status;
    }

    /**
     * @param string $delivery_status
     */
    public function setDeliveryStatus($delivery_status): void
    {
        $this->delivery_status = $delivery_status;
    }

    /**
     * @return bool
     */
    public function isNotDelivered(): bool
    {
        return $this->getDeliveryStatus() === self::$notDelivered;
    }

    /**
     * @return bool
     */
    public function isFullyDelivered(): bool
    {
        return $this->getDeliveryStatus() === self::$fullyDelivered;
    }

    /**
     * @return bool
     */
    public function isPartlyDelivered(): bool
    {
        return $this->getDeliveryStatus() === self::$partlyDelivered;
    }

    /**
     * @return bool
     */
    public function isDeliveryClosed(): bool
    {
        return $this->getDeliveryStatus() === self::$closed;
    }

    /**
     * @return bool
     */
    public function isNotApplicable(): bool
    {
        return $this->getDeliveryStatus() === self::$notApplicable;
    }

}