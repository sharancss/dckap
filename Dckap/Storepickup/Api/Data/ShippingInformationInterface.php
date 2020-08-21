<?php

namespace Dckap\Storepickup\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

/**
 * Shipping Rate Info data interface
 *
 * @api
 */
interface ShippingInformationInterface extends ExtensibleDataInterface
{

    const PICKUP_DATE = 'storepickup_date';

    /**
     * Retrieve rate info message
     *
     * @return string
     */
    public function getStorepickupDate();

    /**
     * Set rate info message
     *
     * @param string $storepickupDate
     * @return $this
     */
    public function setStorepickupDate($storepickupDate);
}