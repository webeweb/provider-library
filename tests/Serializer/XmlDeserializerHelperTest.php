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

use WBW\Library\Provider\Serializer\XmlDeserializerHelper;
use WBW\Library\Provider\Tests\AbstractTestCase;
use WBW\Library\Provider\Tests\Fixtures\Serializer\TestSerializerHelper;

/**
 * XML deserializer helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Provider\Tests\Serializer
 */
class XmlDeserializerHelperTest extends AbstractTestCase {

    /**
     * Tests the getChildDomNodeAttribute() method.
     *
     * @return void
     */
    public function testGetChildDomNodeTextContent(): void {

        $this->assertEquals("text content", XmlDeserializerHelper::getChildDomNodeTextContent($this->document->documentElement, "children"));
        $this->assertNull(XmlDeserializerHelper::getChildDomNodeTextContent($this->document->documentElement, "child"));
    }

    /**
     * Tests the getDomNodeAttributeValue() method.
     *
     * @return void
     */
    public function testGetDomNodeAttributeValue(): void {

        $this->assertEquals("value", XmlDeserializerHelper::getDomNodeAttributeValue($this->document->documentElement, "attribute"));
        $this->assertNull(XmlDeserializerHelper::getDomNodeAttributeValue($this->document->documentElement->childNodes->item(0), "attribute"));
    }

    /**
     * Tests the getDomNodeByName() method.
     *
     * @return void
     */
    public function testGetDomNodeByName(): void {

        $this->assertNotNull(XmlDeserializerHelper::getDomNodeByName("children", $this->document->documentElement->childNodes));
        $this->assertNull(XmlDeserializerHelper::getDomNodeByName("child", $this->document->documentElement->childNodes));
    }

    /**
     * Tests the getDomNodesByName() method.
     *
     * @return void
     */
    public function testGetDomNodesByName(): void {

        $this->assertCount(2, XmlDeserializerHelper::getDomNodesByName("child", $this->document->documentElement->childNodes));
        $this->assertCount(0, XmlDeserializerHelper::getDomNodesByName("child"));
    }

    /**
     * Tests the log() method.
     *
     * @return void
     */
    public function testLog(): void {

        TestSerializerHelper::setLogger($this->logger);
        $this->assertNull(XmlDeserializerHelper::log($this->document->documentElement));
    }

    /**
     * Tests the log() method.
     *
     * @return void
     */
    public function testLogWithoutLogger(): void {

        TestSerializerHelper::setLogger(null);
        $this->assertNull(XmlDeserializerHelper::log($this->document->documentElement));
    }
}