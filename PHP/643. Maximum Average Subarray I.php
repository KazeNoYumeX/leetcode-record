<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection, PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    /**
     * @param  int[]  $nums
     *
     * @noinspection PhpUnused
     */
    public function findMaxAverage(array $nums, int $k): float
    {
        $sum = 0;
        $max = PHP_INT_MIN;

        for ($i = 0; $i < count($nums); $i++) {
            if ($i > $k - 1) {
                $sum -= $nums[$i - $k];
            }

            $sum += $nums[$i];

            if ($i >= $k - 1) {
                if ($sum > $max) {
                    $max = $sum;
                }
            }
        }

        return $max / $k;
    }
}
