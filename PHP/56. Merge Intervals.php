<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    /**
     * @param  int[][]  $intervals
     * @return int[][]
     */
    public function merge(array $intervals): array
    {
        $length = count($intervals);

        if ($length <= 1) {
            return $intervals;
        }

        sort($intervals);

        $interval = $intervals[0];
        $mergedIntervals = [];

        for ($i = 1; $i < $length; $i++) {
            if ($interval[1] >= $intervals[$i][0]) {
                $interval[1] = max($interval[1], $intervals[$i][1]);
            } else {
                $mergedIntervals[] = $interval;
                $interval = $intervals[$i];
            }
        }

        $mergedIntervals[] = $interval;

        return $mergedIntervals;
    }
}
