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
    public function removeDuplicates(array &$nums): int
    {
        $nums = array_flip(array_flip($nums));

        return count($nums);
    }
}
