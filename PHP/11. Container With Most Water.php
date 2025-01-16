<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    /**
     * @param  int[]  $height
     */
    public function maxArea(array $height): int
    {
        $start = 0;
        $end = count($height) - 1;
        $max = 0;
        $highest = max($height);

        while ($end * $highest > $max) {
            $left = $height[$start];
            $right = $height[$end];

            $min = min($left, $right);
            $max = max($max, $min * ($end - $start));

            if ($left < $right) {
                $start++;
            } else {
                $end--;
            }
        }

        return $max;
    }
}
