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
    public function majorityElement(array $nums): int
    {
        $majority = $nums[0];
        $count = 1;

        for ($i = 1; $i < count($nums); $i++) {
            if ($count === 0) {
                $majority = $nums[$i];
                $count = 1;
            } elseif ($nums[$i] === $majority) {
                $count++;
            } else {
                $count--;
            }
        }

        return $majority;
    }
}
