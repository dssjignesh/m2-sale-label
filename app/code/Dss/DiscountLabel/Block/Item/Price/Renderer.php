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
namespace Dss\DiscountLabel\Block\Item\Price;

use Magento\Framework\View\Element\Template;
use Magento\Checkout\Helper\Data;
use Dss\DiscountLabel\Helper\Data as ConfigData;

class Renderer extends Template
{
    /**
     * @param Data $dataHelper
     * @param ConfigData $configData
     */
    public function __construct(
        protected Data $dataHelper,
        protected ConfigData $configData
    ) {
    }

    /**
     * Class Helper::Data
     *
     * @return Data
     */
    public function getHelper(): Data
    {
        return $this->dataHelper;
    }

    /**
     * Class ConfigHelper::Data
     *
     * @return ConfigData
     */
    public function getConfigHelper(): ConfigData
    {
        return $this->configData;
    }
}
