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
    public function longestOnes(array $nums, int $k): int
    {
        $left = 0;
        $right = 0;

        for (; $right < count($nums); $right++) {
            if ($nums[$right] == 0) {
                $k--;
            }

            if ($k < 0 && $nums[$left++] == 0) {
                $k++;
            }
        }

        return $right - $left;
    }
}
