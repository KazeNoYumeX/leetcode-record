<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection, PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    /**
     * @param  int[]  $nums
     *
     * @noinspection PhpUnused
     */
    public function removeElement(array &$nums, int $val): int
    {
        $i = 0;

        for ($j = 0; $j < count($nums); $j++) {
            if ($nums[$j] !== $val) {
                $nums[$i++] = $nums[$j];
            }
        }

        return $i;
    }
}
