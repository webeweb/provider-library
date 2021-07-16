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

use JsonSerializable;

/**
 * JSON serializer helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Provider\Serializer
 */
class JsonSerializerHelper {

    /**
     * Serializes an array.
     *
     * @param JsonSerializable[] $models The models.
     * @return array Returns the serialized array.
     */
    public static function jsonSerializeArray(array $models): array {

        $output = [];

        foreach ($models as $current) {
            $output[] = static::jsonSerializeModel($current);
        }

        return $output;
    }

    /**
     * Serializes a model.
     *
     * @param JsonSerializable|null $model The model.
     * @return array Returns the serialized model.
     */
    public static function jsonSerializeModel(?JsonSerializable $model): array {

        if (null === $model) {
            return [];
        }

        return $model->jsonSerialize();
    }
}