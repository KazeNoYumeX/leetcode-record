<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    /**
     * @param  int[][]  $buildings
     * @return int[][]
     */
    public function getSkyline(array $buildings): array
    {
        $skyline = [];
        $points = [];

        foreach ($buildings as $building) {
            $points[] = [$building[0], $building[2]];
            $points[] = [$building[1], -$building[2]];
        }

        usort($points, fn ($a, $b) => $a[0] == $b[0] ? $b[1] - $a[1] : $a[0] - $b[0]);

        $pq = new SplPriorityQueue;
        $pq->setExtractFlags(SplPriorityQueue::EXTR_BOTH);

        // Insert the initial height 0
        $pq->insert(0, 0);

        $prev = 0;
        // Initialize the height count array, the count of the initial height 0 is 1
        $heights = [0 => 1];

        foreach ($points as $high) {
            if ($high[1] > 0) {
                $pq->insert($high[1], $high[1]);
                $heights[$high[1]] = ($heights[$high[1]] ?? 0) + 1;
            } else {
                $heights[-$high[1]]--;
            }

            // Remove the height count 0
            while (! $pq->isEmpty() && $heights[$pq->top()['data']] == 0) {
                $pq->extract();
            }

            $current = $pq->isEmpty() ? 0 : $pq->top()['data'];
            if ($prev != $current) {
                $skyline[] = [$high[0], $current];
                $prev = $current;
            }
        }

        return $skyline;
    }
}
