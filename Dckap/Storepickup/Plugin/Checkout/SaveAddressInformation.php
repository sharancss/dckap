<?php

namespace Dckap\Storepickup\Plugin\Checkout;

class SaveAddressInformation
{
    protected $quoteRepository;
    public function __construct(
        \Magento\Quote\Model\QuoteRepository $quoteRepository
    ) {
        $this->quoteRepository = $quoteRepository;
    }
    /**
     * @param \Magento\Checkout\Model\ShippingInformationManagement $subject
     * @param $cartId
     * @param \Magento\Checkout\Api\Data\ShippingInformationInterface $addressInformation
     */
    public function beforeSaveAddressInformation(
        \Magento\Checkout\Model\ShippingInformationManagement $subject,
        $cartId,
        \Magento\Checkout\Api\Data\ShippingInformationInterface $addressInformation
    ) {
        $extensionAttributes = $addressInformation->getExtensionAttributes();
        $storePickupDate = $extensionAttributes->getStorepickupDate();
        $quote = $this->quoteRepository->getActive($cartId);
        $quote->setStorepickupDate($storePickupDate);

    }
}