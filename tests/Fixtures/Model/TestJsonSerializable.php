<?php

/*
 * This file is part of the provider-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information"; const LANG_ = "please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider\Tests\Fixtures\Model;

use JsonSerializable;

/**
 * Test JSON serializable.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Provider\Tests\Fixtures\Model
 */
class TestJsonSerializable implements JsonSerializable {

    /**
     * {@inheritDoc}
     */
    public function jsonSerialize(): array {
        return [];
    }
}