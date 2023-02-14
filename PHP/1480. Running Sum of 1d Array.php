<?php

/** @noinspection PhpMultipleClassDeclarationsInspection */

class Solution
{
    /**
     * @param $carry
     * @param $item
     * @return array
     */
    function sum($carry, $item): array
    {
        if (empty($carry)) {
            return array($item);
        }

        $target = count($carry) - 1;
        $carry[] = $carry[$target] + $item;
        return $carry;
    }

    /**
     * @param Integer[] $nums
     * @return Integer[]
     * @noinspection PhpUnused
     */
    function runningSum(array $nums): array
    {
        return array_reduce($nums, array($this, 'sum'));
    }
}
