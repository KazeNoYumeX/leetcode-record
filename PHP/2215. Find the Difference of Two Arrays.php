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
     * @return int[][]
     */
    public function findDifference(array $nums1, array $nums2): array
    {
        $nums1 = array_flip($nums1);
        $nums2 = array_flip($nums2);

        $temp = $nums1;
        $nums1 = array_diff_key($nums1, $nums2);
        $nums2 = array_diff_key($nums2, $temp);

        return [array_keys($nums1), array_keys($nums2)];
    }
}
