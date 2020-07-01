<?php

namespace App\Utils;

class IntegerUtil
{
    /**
     * @param $masked
     * @return integer[]
     */
    public static function factorize($masked)
    {
        $result = [];
        $end = 0;
        if (!is_numeric($masked)) return $result;

        while (0 < $masked) {
            for ($i = 0, $n = 0; $i <= $masked; $i = 1 * pow(2, $n), $n++) {
                $end = $i;
            }

            $result[] = $end;
            $masked -= $end;
        }

        return $result;
    }

    /**
     * @param integer[] $values
     * @return integer
     */
    public static function toInteger(array $values)
    {
        $result = 0;
        foreach ($values as $value) {
            $result += $value;
        }

        return $result;
    }
}
