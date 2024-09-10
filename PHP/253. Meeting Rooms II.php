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
    public function minMeetingRooms(array $intervals): int
    {
        sort($intervals);

        $heap = new SplMinHeap;
        $heap->insert($intervals[0][1]);

        for ($i = 1; $i < count($intervals); $i++) {
            [$start, $end] = $intervals[$i];

            if ($heap->top() <= $start) {
                $heap->extract();
            }

            $heap->insert($end);
        }

        return $heap->count();
    }
}
