<?php


namespace App\Service;


use InvalidArgumentException;

class Func
{
    /**
     * @param $x
     * @param $y
     * @return float|int
     * @throws InvalidArgumentException
     */
    public function example($x, $y)
    {
        if ($x < 0) {
            throw new InvalidArgumentException('you must not get square root from negative numbers');
        }

        if ($y == 0) {
            throw new InvalidArgumentException('dividing on 0 error');
        }
        return (sqrt($x) / $y);
    }
}