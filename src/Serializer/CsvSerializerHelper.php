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

use WBW\Library\Provider\Model\CsvSerializable;

/**
 * CSV serializer helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Provider\Serializer
 */
class CsvSerializerHelper extends SerializerHelper {

    /**
     * Serializes an array.
     *
     * @param CsvSerializable[] $models The models.
     * @return string Returns the serialized array.
     */
    public static function serializeArray(array $models): string {

        $output = [];

        foreach ($models as $current) {

            $result = static::serializeModel($current);
            if (null === $result) {
                continue;
            }

            $output[] = $result;
        }

        return implode("\n", $output);
    }

    /**
     * Serializes a model.
     *
     * @param CsvSerializable|null $model The model.
     * @return string|null Returns the serialized model.
     */
    public static function serializeModel(?CsvSerializable $model): ?string {

        if (null === $model) {
            return null;
        }

        return $model->csvSerialize();
    }
}