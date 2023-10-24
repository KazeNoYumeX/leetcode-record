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
     * @return null
     */
    public function merge(array &$nums1, int $m, array $nums2, int $n)
    {
        $nums1 = array_slice($nums1, 0, $m);
        $nums2 = array_slice($nums2, 0, $n);
        $nums1 = array_merge($nums1, $nums2);

        return sort($nums1);
    }
}
