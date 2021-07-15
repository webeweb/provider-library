<?php

/*
 * This file is part of the provider-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Provider\Exception;

use Exception;

/**
 * API exception.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Provider\Exception
 */
class ApiException extends Exception {

    /**
     * Constructor.
     *
     * @param string $message The message.
     * @param int $code The code.
     * @param Exception|null $previous The previous exception.
     */
    public function __construct(string $message, int $code = 500, Exception $previous = null) {
        parent::__construct($message, $code, $previous);
    }
}