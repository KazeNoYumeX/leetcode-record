<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    /**
     * @param  int[]  $nums1
     * @param  int[]  $nums2
     */
    public function merge(array &$nums1, int $m, array $nums2, int $n): void
    {
        $m--;
        $n--;

        for ($i = ($m + $n + 1); $i >= 0; $i--) {
            if ($m < 0) {
                $nums1[$i] = $nums2[$n];
                $n--;

                continue;
            }

            if ($n < 0) {
                $nums1[$i] = $nums1[$m];
                $m--;

                continue;
            }

            if ($nums2[$n] > $nums1[$m]) {
                $nums1[$i] = $nums2[$n];
                $n--;
            } else {
                $nums1[$i] = $nums1[$m];
                $m--;
            }
        }
    }
}
