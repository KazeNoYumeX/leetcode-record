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
    public function findMedianSortedArrays(array $nums1, array $nums2): float
    {
        $length1 = count($nums1);
        $length2 = count($nums2);

        if ($length1 > $length2) {
            return $this->findMedianSortedArrays($nums2, $nums1);
        }

        $left = 0;
        $right = $length1;
        while ($left <= $right) {
            $x = $left + (int) (($right - $left) / 2);
            $y = (int) (($length1 + $length2 + 1) / 2) - $x;

            $xLeft = $x === 0 ? PHP_INT_MIN : $nums1[$x - 1];
            $xRight = $x === $length1 ? PHP_INT_MAX : $nums1[$x];

            $yLeft = $y === 0 ? PHP_INT_MIN : $nums2[$y - 1];
            $yRight = $y === $length2 ? PHP_INT_MAX : $nums2[$y];

            if ($xLeft <= $yRight && $yLeft <= $xRight) {
                if (($length1 + $length2) % 2 === 0) {
                    return (max($xLeft, $yLeft) + min($xRight, $yRight)) / 2;
                }

                return max($xLeft, $yLeft);
            } elseif ($xRight > $yLeft) {
                $right = $x - 1;
            } else {
                $left = $x + 1;
            }
        }

        return -1;
    }
}
