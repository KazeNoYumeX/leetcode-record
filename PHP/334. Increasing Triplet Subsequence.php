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
    public function increasingTriplet(array $nums): bool
    {
        if (count($nums) < 3) {
            return false;
        }

        $first = $second = PHP_INT_MAX;

        foreach ($nums as $num) {
            if ($num <= $first) {
                $first = $num;
            } elseif ($num <= $second) {
                $second = $num;
            } else {
                return true;
            }
        }

        return false;
    }
}
