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
     */
    public function splitArray(array $nums, int $k): int
    {
        $sum = array_sum($nums);
        $max = max($nums);

        return $this->binarySearch($nums, $k, $sum, $max);

    }

    private function binarySearch(array $nums, int $k, int $high, int $low): int
    {

        while ($low <= $high) {
            $mid = (int) ($low + ($high - $low) / 2);
            if ($this->valid($nums, $k, $mid)) {
                $high = $mid - 1;
            } else {
                $low = $mid + 1;
            }
        }

        return $low;
    }

    private function valid(array $nums, int $k, int $sum): bool
    {
        $total = 0;
        $count = 1;

        foreach ($nums as $num) {
            $total += $num;
            if ($total > $sum) {
                $total = $num;
                $count++;

                if ($count > $k) {
                    return false;
                }
            }
        }

        return true;
    }
}
