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

use WBW\Library\Provider\Model\CsvSerializable;

/**
 * Test CSV serializable.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Provider\Tests\Fixtures\Model
 */
class TestCsvSerializable implements CsvSerializable {

    /**
     * {@inheritDoc}
     */
    public function csvSerialize(): ?string {
        return "";
    }
}