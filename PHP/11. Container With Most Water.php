<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    /**
     * @param  int[]  $height
     *
     * @noinspection PhpUnused
     */
    public function maxArea(array $height): int
    {
        $left = 0;
        $right = count($height) - 1;
        $max = 0;

        while ($left < $right) {
            $max = max($max,
                min($height[$left], $height[$right]) * ($right - $left));

            if ($height[$left] < $height[$right]) {
                $left++;
            } else {
                $right--;
            }
        }

        return $max;
    }
}
