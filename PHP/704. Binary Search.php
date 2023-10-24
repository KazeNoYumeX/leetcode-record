<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection
 *  @noinspection PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    /**
     * @param  int[]  $nums
     */
    public function search(array $nums, int $target): int
    {
        $lo = 0;
        $hi = count($nums) - 1;

        while ($lo < $hi) {
            $mid = $lo + floor(($hi - $lo + 1) / 2);
            if ($target < $nums[$mid]) {
                $hi = $mid - 1;
            } else {
                $lo = $mid;
            }
        }

        return $nums[$lo] == $target ? $lo : -1;
    }
}
