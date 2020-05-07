<?php

namespace App\Utils;

class IntegerUtil
{
    /**
     * @param integer $mixed
     * @return integer[]
     */
    public static function factorize($maskd)
    {
        $result = [];
        if (!is_numeric($maskd)) return $result;

        while (0 < $maskd) {
            for ($i = 0, $n = 0; $i <= $maskd; $i = 1 * pow(2, $n), $n++) {
                $end = $i;
            }

            $result[] = $end;
            $maskd -= $end;
        }

        return $result;
    }

    /**
     * @param integer[] $values
     * @return integer
     */
    public static function defactorize(array $values)
    {
        $result = 0;
        foreach ($values as $value) {
            $result += $value;
        }

        return $result;
    }
}