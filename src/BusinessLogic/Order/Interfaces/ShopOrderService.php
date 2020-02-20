<?php

namespace Packlink\BusinessLogic\Order\Interfaces;

use Packlink\BusinessLogic\Http\DTO\Tracking;
use Packlink\BusinessLogic\Order\Objects\Order;

/**
 * Interface ShopOrderService.
 *
 * @package Packlink\BusinessLogic\Order\Interfaces
 */
interface ShopOrderService
{
    /**
     * Fully qualified name of this interface.
     */
    const CLASS_NAME = __CLASS__;

    /**
     * Fetches and returns system order by its unique identifier.
     *
     * @param string $orderId $orderId Unique order id.
     *
     * @return Order Order object.
     *
     * @throws \Packlink\BusinessLogic\Order\Exceptions\OrderNotFound When order with provided id is not found.
     */
    public function getOrderAndShippingData($orderId);

    /**
     * Handles updated tracking info for order with a given ID.
     *
     * @param string $orderId Shop order ID.
     * @param Tracking[] $trackings Shipment tracking history.
     *
     * @throws \Packlink\BusinessLogic\Order\Exceptions\OrderNotFound When order for provided reference is not found.
     *  When local order shipment details are not found.
     */
    public function handleUpdatedTrackingInfo($orderId, array $trackings);

    /**
     * Sets order Packlink shipping status to an order with a given ID.
     *
     * @param string $orderId Shop order ID.
     * @param string $shippingStatus Packlink shipping status.
     *
     * @throws \Packlink\BusinessLogic\Order\Exceptions\OrderNotFound When order for provided reference is not found.
     */
    public function updateShipmentStatus($orderId, $shippingStatus);
}