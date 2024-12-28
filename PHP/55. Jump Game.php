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
    public function canJump(array $nums): bool
    {
        $end = count($nums) - 1;

        for ($i = $end - 1; $i >= 0; $i--) {
            if ($i + $nums[$i] >= $end) {
                $end = $i;
            }
        }

        return $end === 0;
    }
}
