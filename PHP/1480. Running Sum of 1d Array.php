<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection, PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    public function sum($carry, $item): array
    {
        if (empty($carry)) {
            return [$item];
        }

        $target = count($carry) - 1;
        $carry[] = $carry[$target] + $item;

        return $carry;
    }

    /**
     * @param  int[]  $nums
     * @return int[]
     *
     * @noinspection PhpUnused
     */
    public function runningSum(array $nums): array
    {
        return array_reduce($nums, [$this, 'sum']);
    }
}
