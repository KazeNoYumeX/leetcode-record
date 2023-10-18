<?php

/** @noinspection PhpMultipleClassDeclarationsInspection */
class Solution
{
    /**
     * @param  int[]  $nums
     * @return int[]
     *
     * @noinspection PhpUnused
     */
    public function productExceptSelf(array $nums): array
    {
        $numCount = count($nums);
        $result = array_fill(0, $numCount, 1);

        $num = 1;
        for ($i = $numCount - 1; $i >= 0; $i--) {
            $result[$i] = $num;
            $num *= $nums[$i];
        }

        $num = 1;
        for ($i = 0; $i < $numCount; $i++) {
            $result[$i] *= $num;
            $num *= $nums[$i];
        }

        return $result;
    }
}
