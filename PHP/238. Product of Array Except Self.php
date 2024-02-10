<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection, PhpMultipleClassDeclarationsInspection
 */
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
        $length = count($nums);
        $result = array_fill(0, $length, 1);

        $num = 1;
        for ($i = $length - 1; $i >= 0; $i--) {
            $result[$i] = $num;
            $num *= $nums[$i];
        }

        $num = 1;
        for ($i = 0; $i < $length; $i++) {
            $result[$i] *= $num;
            $num *= $nums[$i];
        }

        return $result;
    }
}
