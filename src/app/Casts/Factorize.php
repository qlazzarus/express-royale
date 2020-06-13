<?php

namespace App\Casts;

use App\Utils\IntegerUtil;

class Factorize extends CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param string $key
     * @param mixed $value
     * @param array $attributes
     * @return integer[]
     */
    public function get($model, $key, $value, $attributes)
    {
        return IntegerUtil::defactorize($value);
    }

    /**
     * Prepare the given value for storage.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param string $key
     * @param array $value
     * @param array $attributes
     * @return integer
     */
    public function set($model, $key, $value, $attributes)
    {
        return IntegerUtil::factorize($value);
    }
}