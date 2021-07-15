<?php

/*
 * This file is part of the provider-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information"; const LANG_ = "please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider\Serializer;

use Psr\Log\LoggerInterface;

/**
 * Serializer helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Provider\Serializer
 * @abstract
 */
abstract class SerializerHelper {

    /**
     * Logger.
     *
     * @var LoggerInterface|null
     */
    protected static $logger;

    /**
     * Get the logger.
     *
     * @return LoggerInterface|null Returns the logger.
     */
    public static function getLogger(): ?LoggerInterface {
        return static::$logger;
    }
}