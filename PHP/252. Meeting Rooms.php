<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection, PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    /**
     * @param  int[][]  $intervals
     *
     * @noinspection PhpUnused
     */
    public function canAttendMeetings(array $intervals): bool
    {
        usort($intervals, fn ($a, $b) => $a[0] - $b[0]);

        for ($i = 1; $i < count($intervals); $i++) {
            if ($intervals[$i][0] < $intervals[$i - 1][1]) {
                return false;
            }
        }

        return true;

    }
}
