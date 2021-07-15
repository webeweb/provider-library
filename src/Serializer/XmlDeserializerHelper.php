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

use DOMNode;
use DOMNodeList;

/**
 * XML deserializer helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Provider\Serializer
 */
class XmlDeserializerHelper extends SerializerHelper {

    /**
     * Get a child DOM node text content.
     *
     * @param DOMNode $domNode The DOM node.
     * @param string $nodeName The node name.
     * @return string|null Returns the attribute value in case of success, null otherwise.
     */
    public static function getChildDomNodeTextContent(DOMNode $domNode, string $nodeName): ?string {

        $domNode = static::getDOMNodeByName($nodeName, $domNode->childNodes);
        if (null === $domNode) {
            return null;
        }

        return trim($domNode->textContent);
    }

    /**
     * Get a DOM node attribute value.
     *
     * @param DOMNode $domNode The DOM node.
     * @param string $attributeName The attribute name.
     * @return string|null Returns the attribute value in case of success, null otherwise.
     */
    public static function getDomNodeAttributeValue(DOMNode $domNode, string $attributeName): ?string {

        if (null === $domNode->attributes || null === $domNode->attributes->getNamedItem($attributeName)) {
            return null;
        }

        $attribute = $domNode->attributes->getNamedItem($attributeName);

        return trim($attribute->nodeValue);
    }

    /**
     * Get a DOM node by name.
     *
     * @param string $nodeName The node name.
     * @param DOMNodeList|null $domNodeList The DOM node list.
     * @return DOMNode|null Returns the DOM node in case of success, null otherwise.
     */
    public static function getDomNodeByName(string $nodeName, DOMNodeList $domNodeList = null): ?DOMNode {

        $domNodes = static::getDomNodesByName($nodeName, $domNodeList);
        if (1 !== count($domNodes)) {
            return null;
        }

        return $domNodes[0];
    }

    /**
     * Get the DOM nodes by name.
     *
     * @param string $nodeName The node name.
     * @param DOMNodeList|null $domNodeList The DOM node list.
     * @return DOMNode[] Returns the DOM nodes.
     */
    public static function getDomNodesByName(string $nodeName, DOMNodeList $domNodeList = null): array {

        if (null === $domNodeList) {
            return [];
        }

        $domNodes = [];

        /** @var DOMNode $current */
        foreach ($domNodeList as $current) {

            if ($nodeName !== $current->nodeName) {
                continue;
            }

            $domNodes[] = $current;
        }

        return $domNodes;
    }
}