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
    public function longestSubarray(array $nums): int
    {
        $left = 0;
        $right = 0;

        for ($remove = 1; $right < count($nums); $right++) {
            if ($nums[$right] == 0) {
                $remove--;
            }

            if ($remove < 0 && $nums[$left++] == 0) {
                $remove++;
            }
        }

        return $right - $left - 1;
    }
}
