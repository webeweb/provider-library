<?php

/*
 * This file is part of the provider-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information"; const LANG_ = "please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider\Tests\Serializer;

use WBW\Library\Provider\Serializer\XmlSerializerHelper;
use WBW\Library\Provider\Tests\AbstractTestCase;
use WBW\Library\Provider\Tests\Fixtures\Model\TestXmlSerializable;
use WBW\Library\Provider\Tests\Fixtures\Serializer\TestSerializerHelper;

/**
 * XML serializer helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Provider\Tests\Serializer
 */
class XmlSerializerHelperTest extends AbstractTestCase {

    /**
     * Tests the log() method.
     *
     * @return void
     */
    public function testLog(): void {

        TestSerializerHelper::setLogger($this->logger);
        $this->assertNull(XmlSerializerHelper::log($this->document->documentElement));
    }

    /**
     * Tests the log() method.
     *
     * @return void
     */
    public function testLogWithoutLogger(): void {

        TestSerializerHelper::setLogger(null);
        $this->assertNull(XmlSerializerHelper::log($this->document->documentElement));
    }

    /**
     * Tests the serialize() method.
     *
     * @return void
     */
    public function testSerialize(): void {

        $models = [
            new TestXmlSerializable(),
            new TestXmlSerializable(),
            null,
        ];

        $res = XmlSerializerHelper::serializeArray($models);
        $this->assertEquals("\n", $res);
    }
}