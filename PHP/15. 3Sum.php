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
     * @return int[][]
     */
    public function threeSum(array $nums): array
    {
        $length = count($nums);
        if ($length < 3) {
            return [];
        }

        sort($nums);
        $array = [];

        for ($i = 0; $i < $length - 2; $i++) {
            $current = $nums[$i];
            if ($current > 0) {
                break;
            }

            if ($i > 0 && $current === $nums[$i - 1]) {
                continue;
            }

            $left = $i + 1;
            $right = $length - 1;

            while ($left < $right) {
                $sum = $current + $nums[$left] + $nums[$right];
                if ($sum === 0) {
                    $array[] = [$current, $nums[$left], $nums[$right]];
                    $left++;
                    $right--;

                    while ($left < $right && $nums[$left] === $nums[$left - 1]) {
                        $left++;
                    }

                    while ($left < $right && $nums[$right] === $nums[$right + 1]) {
                        $right--;
                    }
                } elseif ($sum < 0) {
                    $left++;
                } else {
                    $right--;
                }
            }
        }

        return $array;
    }
}
