<?php

/*
 * This file is part of the provider-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information"; const LANG_ = "please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider\Tests\Fixtures\Serializer;

use Psr\Log\LoggerInterface;
use WBW\Library\Provider\Serializer\SerializerHelper;

/**
 * Test serializer helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Provider\Tests\Fixtures\Serializer
 */
class TestSerializerHelper extends SerializerHelper {

    /**
     * Set the logger.
     *
     * @param LoggerInterface|null $logger The logger.
     * @return void
     */
    public static function setLogger(?LoggerInterface $logger): void {
        static::$logger = $logger;
    }
}