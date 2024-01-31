<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection, PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    /**
     * @param  int[]  $arr
     *
     * @noinspection PhpUnused
     */
    public function uniqueOccurrences(array $arr): bool
    {
        $arr = array_count_values($arr);

        return count($arr) === count(array_flip($arr));
    }
}
