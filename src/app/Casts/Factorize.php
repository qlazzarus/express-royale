<?php

namespace App\Casts;

use App\Utils\IntegerUtil;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Database\Eloquent\Model;

class Factorize implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param Model $model
     * @param string $key
     * @param mixed $value
     * @param array $attributes
     * @return integer
     */
    public function get($model, $key, $value, $attributes)
    {
        return IntegerUtil::toInteger($value);
    }

    /**
     * Prepare the given value for storage.
     *
     * @param Model $model
     * @param string $key
     * @param array $value
     * @param array $attributes
     * @return integer[]
     */
    public function set($model, $key, $value, $attributes)
    {
        return IntegerUtil::factorize($value);
    }
}
