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
        $profit = 0;

        foreach ($prices as $price) {
            if (isset($prev)) {
                $profit += max(0, $price - $prev);
            }

            $prev = $price;
        }

        return $profit;
    }
}
