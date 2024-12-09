<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    /**
     * @param  int[]  $prices
     */
    public function maxProfit(array $prices): int
    {
        $min = PHP_INT_MAX;
        $max = 0;

        foreach ($prices as $price) {
            if ($price < $min) {
                $min = $price;
            }

            $profit = $price - $min;
            if ($profit > $max) {
                $max = $profit;
            }
        }

        return $max;
    }
}
