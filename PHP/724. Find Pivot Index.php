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
    public function pivotIndex(array $nums): int
    {
        $left = 0;
        $right = array_sum($nums);

        for ($i = 0; $i < count($nums); $i++) {
            $current = $nums[$i];
            if ($left === $right -= $current) {
                return $i;
            }
            $left += $current;
        }

        return -1;
    }
}
