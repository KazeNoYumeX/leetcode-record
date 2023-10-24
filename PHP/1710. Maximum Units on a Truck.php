<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection
 *  @noinspection PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    /**
     * @param  int[][]  $boxTypes
     * @param  int  $truckSize
     * @return int
     */
    public function maximumUnits($boxTypes, $truckSize)
    {
        $count = 0;

        usort($boxTypes, function ($a, $b) {
            return $a[1] < $b[1];
        });

        foreach ($boxTypes as $box) {
            $amount = min($box[0], $truckSize);
            $count += $amount * $box[1];
            $truckSize -= $amount;
        }

        return $count;
    }
}
