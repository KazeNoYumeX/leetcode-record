<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection, PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    /**
     * @param  int[]  $gain
     *
     * @noinspection PhpUnused
     */
    public function largestAltitude(array $gain): int
    {
        $max = 0;
        $current = 0;

        for ($i = 0; $i < count($gain); $i++) {
            $current += $gain[$i];
            $max = max($max, $current);
        }

        return $max;
    }
}
