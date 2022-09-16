<?php

class Solution
{
    /**
     * @param Integer[] $nums1
     * @param Integer $m
     * @param Integer[] $nums2
     * @param Integer $n
     * @return NULL
     */
    function merge(array &$nums1, int $m, array $nums2, int $n)
    {
        $nums1 = array_slice($nums1, 0, $m);
        $nums2 = array_slice($nums2, 0, $n);
        $nums1 = array_merge($nums1, $nums2);
        return sort($nums1);
    }
}