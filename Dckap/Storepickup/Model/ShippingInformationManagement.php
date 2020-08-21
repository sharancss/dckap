<?php

namespace Dckap\Storepickup\Model;

use Dckap\Storepickup\Api\Data\ShippingInformationInterface;
use Magento\Framework\Model\AbstractExtensibleModel;

class ShippingInformationManagement extends AbstractExtensibleModel implements ShippingInformationInterface {

    /**
     * Retrieve pickup date info message
     *
     * @return string
     */
    public function getStorepickupDate() {
        return $this->getData(self::PICKUP_DATE);
    }

    /**
     * Set pickup date info message
     *
     * @param string $pickupDate
     * @return $this
     */
    public function setStorepickupDate($pickupDate) {
        return $this->setData(self::PICKUP_DATE, $pickupDate);
    }

}
