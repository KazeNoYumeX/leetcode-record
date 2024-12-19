<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    /**
     * @param  int[][]  $firstList
     * @param  int[][]  $secondList
     * @return int[][]
     */
    public function intervalIntersection(array $firstList, array $secondList): array
    {
        $intervals = [];
        $i = $j = 0;

        while ($i < count($firstList) && $j < count($secondList)) {
            $start = max($firstList[$i][0], $secondList[$j][0]);
            $end = min($firstList[$i][1], $secondList[$j][1]);

            if ($start <= $end) {
                $intervals[] = [$start, $end];
            }

            if ($firstList[$i][1] < $secondList[$j][1]) {
                $i++;
            } else {
                $j++;
            }
        }

        return $intervals;
    }
}
