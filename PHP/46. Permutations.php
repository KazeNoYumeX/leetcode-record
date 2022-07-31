<?php

class Solution
{
    private array $ret;

    public function __construct()
    {
        $this->ret = [];
    }

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permute(array $nums): array
    {
        $this->backtrack($nums, []);
        return $this->ret;
    }

    /**
     * @param array $list
     * @param array $temp
     * @return void
     */
    function backtrack(array $list, array $temp): void
    {
        if (count($temp) === count($list)) $this->ret[] = [...$temp];

        foreach ($list as $num) {
            if (array_key_exists($num, $temp)) {
                continue;
            }

            $temp[] = $num;
            $this->backtrack($list, $temp);
            array_pop($temp);
        }
    }
}