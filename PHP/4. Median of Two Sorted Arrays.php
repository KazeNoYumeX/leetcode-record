<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection
 *  @noinspection PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    /**
     * @param  int[]  $nums1
     * @param  int[]  $nums2
     */
    public function findMedianSortedArrays(array $nums1, array $nums2): float
    {
        $array = array_merge($nums1, $nums2);
        sort($array);
        $len = count($array);

        return $len % 2 === 0 ? ($array[$len / 2] + $array[($len - 2) / 2]) / 2 : ($array[($len - 1) / 2]);
    }
}
