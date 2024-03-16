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
        $length = count($nums);

        if ($length < 3) {
            return $length;
        }

        $left = 2;

        for ($right = 2; $right < $length; $right++) {
            if ($nums[$left - 2] !== $nums[$right]) {
                $nums[$left++] = $nums[$right];
            }
        }

        return $left;
    }
}
