<?php

declare(strict_types=1);
/**
 * Digit Software Solutions.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is bundled with this package in the file LICENSE.txt.
 *
 * @category  Dss
 * @package   Dss_DiscountLabel
 * @author    Extension Team
 * @copyright Copyright (c) 2024 Digit Software Solutions. ( https://digitsoftsol.com )
 */
namespace Dss\DiscountLabel\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Config implements ConfigInterface
{
    public const XML_PATH_ENABLED = 'dss_discountlabel/general/enabled';
    public const XML_PATH_DEBUG = 'dss_discountlabel/general/debug';
    public const XML_PATH_CATALOG_DISCOUNT_FORMAT = 'dss_discountlabel/discount/catalog_format';
    public const XML_PATH_CART_DISCOUNT_FORMAT = 'dss_discountlabel/discount/cart_format';

    /**
     * @param ScopeConfigInterface $scopeConfig
     */
    public function __construct(
        protected ScopeConfigInterface $scopeConfig
    ) {
    }

    /**
     * Retrieve configuration flag value.
     *
     * @param string $xmlPath
     * @param int|null $storeId
     * @return bool
     */
    public function getConfigFlag($xmlPath, $storeId = null)
    {
        return $this->scopeConfig->isSetFlag(
            $xmlPath,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    /**
     * Retrieve configuration value.
     *
     * @param string $xmlPath
     * @param int|null $storeId
     * @return string|null
     */
    public function getConfigValue($xmlPath, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $xmlPath,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    /**
     * Check if the module is enabled.
     *
     * @param int|null $storeId
     * @return bool
     */
    public function isEnabled($storeId = null): bool
    {
        return $this->getConfigFlag(self::XML_PATH_ENABLED, $storeId);
    }

    /**
     * Check if debug mode is enabled.
     *
     * @param int|null $storeId
     * @return bool
     */
    public function isDebugEnabled($storeId = null): bool
    {
        return $this->getConfigFlag(self::XML_PATH_DEBUG, $storeId);
    }

    /**
     * Get the catalog discount display format.
     *
     * @param int|null $storeId
     * @return string|null
     */
    public function getCatalogDisplayFormat($storeId = null): ?string
    {
        return $this->getConfigValue(self::XML_PATH_CATALOG_DISCOUNT_FORMAT, $storeId);
    }

    /**
     * Get the cart discount display format.
     *
     * @param int|null $storeId
     * @return string|null
     */
    public function getCartDisplayFormat($storeId = null): ?string
    {
        return $this->getConfigValue(self::XML_PATH_CART_DISCOUNT_FORMAT, $storeId);
    }
}
