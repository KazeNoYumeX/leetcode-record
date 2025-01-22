<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    /**
     * @param  int[]  $arr
     */
    public function uniqueOccurrences(array $arr): bool
    {
        $arr = array_count_values($arr);

        return count($arr) === count(array_flip($arr));
    }
}
