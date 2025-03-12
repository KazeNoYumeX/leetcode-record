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
     */
    public function removeCoveredIntervals(array $intervals): int
    {
        $length = count($intervals);
        if ($length === 1) {
            return $length;
        }

        usort($intervals, function ($a, $b) {
            if ($a[0] === $b[0]) {
                return $b[1] - $a[1];
            }

            return $a[0] - $b[0];
        });

        $count = 1;
        $prev = $intervals[0][1];

        for ($i = 1; $i < $length; $i++) {
            $current = $intervals[$i][1];
            if ($current > $prev) {
                $count++;
                $prev = $current;
            }
        }

        return $count;
    }
}
