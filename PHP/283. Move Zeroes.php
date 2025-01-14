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
    public function moveZeroes(array &$nums): void
    {
        $length = count($nums);
        $zeroSize = 0;

        for ($i = 0; $i < $length; $i++) {
            if ($nums[$i] == 0) {
                $zeroSize++;
            } elseif ($zeroSize > 0) {
                $nums[$i - $zeroSize] = $nums[$i];
                $nums[$i] = 0;
            }
        }
    }
}
