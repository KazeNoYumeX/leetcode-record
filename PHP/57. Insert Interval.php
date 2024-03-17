<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection, PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    /**
     * @param  int[][]  $intervals
     * @param  int[]  $newInterval
     * @return int[][]
     *
     * @noinspection PhpUnused
     */
    public function insert(array $intervals, array $newInterval): array
    {
        $result = [];

        for ($i = 0; $i < count($intervals); $i++) {
            $current = $intervals[$i];

            if ($newInterval == null || $current[1] < $newInterval[0]) {
                $result[] = $current;
            } elseif ($current[0] > $newInterval[1]) {
                $result[] = $newInterval;
                $result[] = $current;
                $newInterval = null;
            } else {
                $newInterval = [
                    min($newInterval[0], $current[0]),
                    max($newInterval[1], $current[1]),
                ];
            }
        }

        if ($newInterval != null) {
            $result[] = $newInterval;
        }

        return $result;
    }
}
