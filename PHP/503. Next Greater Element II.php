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
     * @return int[]
     */
    public function nextGreaterElements(array $nums): array
    {
        $length = count($nums);
        $array = [];
        $elements = array_fill(0, $length, -1);
        for ($i = 0; $i < $length * 2; $i++) {
            $element = $nums[$i % $length];
            while (! empty($array) && $nums[end($array)] < $element) {
                $elements[array_pop($array)] = $element;
            }

            if ($i < $length) {
                $array[] = $i;
            }
        }

        return $elements;
    }
}
