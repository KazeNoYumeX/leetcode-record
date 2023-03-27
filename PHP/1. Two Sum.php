<?php

/** @noinspection PhpMultipleClassDeclarationsInspection */

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     * @noinspection PhpUnused
     */
    function twoSum(array $nums, int $target): array
    {
        $map = [];
        foreach ($nums as $i => $current) {
            $key = $target - $current;
            if (array_key_exists($key, $map)) {
                return [$map[$key], $i];
            }
            $map[$current] = $i;
        }
        return [];
    }
}
