<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    /**
     * @param  int[]  $nums
     *
     * @noinspection PhpUnused
     */
    public function rotate(array &$nums, int $k): null
    {
        $length = count($nums);
        $k = $k % $length;

        if ($k != 0) {
            $nums = array_merge(
                array_slice($nums, $length - $k),
                array_slice($nums, 0, $length - $k)
            );
        }

        return null;
    }
}
