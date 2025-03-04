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
     * @return int[]
     */
    public function nextGreaterElement(array $nums1, array $nums2): array
    {
        $map = [];
        $stack = new SplStack;
        for ($i = count($nums2) - 1; $i >= 0; $i--) {
            while (! $stack->isEmpty() && $nums2[$i] >= $stack->top()) {
                $stack->pop();
            }

            $map[$nums2[$i]] = $stack->isEmpty() ? -1 : $stack->top();
            $stack->push($nums2[$i]);
        }

        $elements = [];
        for ($i = 0; $i < count($nums1); $i++) {
            $elements[$i] = $map[$nums1[$i]];
        }

        return $elements;
    }
}
