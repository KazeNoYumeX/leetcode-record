<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection
 *  @noinspection PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    private array $ret;

    public function __construct()
    {
        $this->ret = [];
    }

    /**
     * @param  int[]  $nums
     * @return int[][]
     */
    public function permute(array $nums): array
    {
        $this->backtrack($nums, []);

        return $this->ret;
    }

    public function backtrack(array $list, array $temp): void
    {
        if (count($temp) === count($list)) {
            $this->ret[] = [...$temp];
        }

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
