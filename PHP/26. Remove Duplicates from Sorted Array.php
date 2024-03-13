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
    public function removeDuplicates(array &$nums): int
    {
        $left = 0;

        for ($right = 1; $right < count($nums); $right++) {
            if ($nums[$left] !== $nums[$right]) {
                $nums[++$left] = $nums[$right];
            }
        }

        return $left + 1;
    }
}
