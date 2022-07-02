<?php

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $storage = [];
        foreach ($nums as $i => $num) {
            $key = $target - $num;
            if (array_key_exists($key, $storage)) {
                return [$storage[$key], $i];
            }
            $storage[$num] = $i;
        }

        return [];
    }
}