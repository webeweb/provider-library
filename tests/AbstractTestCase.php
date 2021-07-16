<?php

/*
 * This file is part of the provider-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider\Tests;

use DOMDocument;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;

/**
 * Abstract test case.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Provider\Tests
 * @abstract
 */
abstract class AbstractTestCase extends TestCase {

    /**
     * DOM document.
     *
     * @var DOMDocument
     */
    protected $document;

    /**
     * Logger.
     *
     * @var LoggerInterface
     */
    protected $logger;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a DOM document mock.
        $this->document = new DOMDocument();
        $this->document->load(realpath(__DIR__ . "/Serializer/XmlSerializerHelperTest.xml"));

        // Set a Logger mock.
        $this->logger = $this->getMockBuilder(LoggerInterface::class)->getMock();
    }
}