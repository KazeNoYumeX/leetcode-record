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
     * @return int[]
     */
    public function twoSum(array $nums, int $target): array
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
