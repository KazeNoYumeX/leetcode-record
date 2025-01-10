<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    /**
     * @param  int[]  $flowerbed
     */
    public function canPlaceFlowers(array $flowerbed, int $n): bool
    {
        if ($n === 0) {
            return true;
        }

        $length = count($flowerbed);
        $i = 0;

        while ($i < $length) {
            if ($flowerbed[$i] == 1) {
                $i += 2;
            } elseif ($flowerbed[$i + 1] !== 1) {
                $n--;
                $i += 2;
            } else {
                $i += 3;
            }

            if ($n === 0) {
                return true;
            }
        }

        return false;
    }
}
