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
namespace Dss\DiscountLabel\Logger;

use Magento\Framework\Logger\Handler\Base;

class Handler extends Base
{
    /**
     * @var string
     */
    protected $fileName = '/var/log/dss_discountlabel.log';

    /**
     * @var int
     */
    protected $loggerType = \Monolog\Logger::INFO;
}
