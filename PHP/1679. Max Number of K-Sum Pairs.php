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
    public function maxOperations(array $nums, int $k): int
    {
        $nums = array_count_values($nums);
        $operations = 0;

        foreach ($nums as $num => $count) {
            if (array_key_exists($index = $k - $num, $nums)) {
                $operations += min($count, $nums[$index]);
            }
        }

        return intdiv($operations, 2);
    }
}
