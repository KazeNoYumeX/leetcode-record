<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    /**
     * @param  int[]  $nums
     */
    public function findMaxAverage(array $nums, int $k): float
    {
        $left = 0;
        $average = PHP_INT_MIN;
        $sum = 0;

        for ($right = 0; $right < count($nums); $right++) {
            $window = $right - $left + 1;

            $sum += $nums[$right];

            if ($window === $k) {
                $average = max($sum / $k, $average);

                $sum -= $nums[$left];
                $left++;
            }
        }

        return $average;
    }
}
