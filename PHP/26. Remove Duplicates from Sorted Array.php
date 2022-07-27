<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function removeDuplicates(array &$nums): int
    {
        $nums = array_flip(array_flip($nums));
        return count($nums);
    }
}