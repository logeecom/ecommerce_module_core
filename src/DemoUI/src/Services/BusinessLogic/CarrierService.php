<?php

namespace Packlink\DemoUI\Services\BusinessLogic;

use Packlink\BusinessLogic\ShippingMethod\Interfaces\ShopShippingMethodService;
use Packlink\BusinessLogic\ShippingMethod\Models\ShippingMethod;
use Packlink\DemoUI\Repository\AssetsRepository;

/**
 * Class CarrierService
 * @package Packlink\DemoUI\Services\BusinessLogic
 */
class CarrierService implements ShopShippingMethodService
{
    /**
     * Returns carrier logo file path of shipping method with provided ID.
     * If logo doesn't exist returns default carrier logo.
     *
     * @param string $carrierName Name of the carrier.
     *
     * @return string Logo file path.
     */
    public function getCarrierLogoFilePath($carrierName)
    {
        $assetsRepo = new AssetsRepository();

        return $assetsRepo->getUrl('images/carriers/carrier.jpg');
    }

    /**
     * Adds / Activates shipping method in shop integration.
     *
     * @param ShippingMethod $shippingMethod Shipping method.
     *
     * @return bool TRUE if activation succeeded; otherwise, FALSE.
     */
    public function add(ShippingMethod $shippingMethod)
    {
        return true;
    }

    /**
     * Updates shipping method in shop integration.
     *
     * @param ShippingMethod $shippingMethod Shipping method.
     */
    public function update(ShippingMethod $shippingMethod)
    {
    }

    /**
     * Deletes shipping method in shop integration.
     *
     * @param ShippingMethod $shippingMethod Shipping method.
     *
     * @return bool TRUE if deletion succeeded; otherwise, FALSE.
     */
    public function delete(ShippingMethod $shippingMethod)
    {
        return true;
    }

    /**
     * Adds backup shipping method based on provided shipping method.
     *
     * @param ShippingMethod $shippingMethod
     *
     * @return bool TRUE if backup shipping method is added; otherwise, FALSE.
     */
    public function addBackupShippingMethod(ShippingMethod $shippingMethod)
    {
        return true;
    }

    /**
     * Deletes backup shipping method.
     *
     * @return bool TRUE if backup shipping method is deleted; otherwise, FALSE.
     */
    public function deleteBackupShippingMethod()
    {
        return true;
    }
}
