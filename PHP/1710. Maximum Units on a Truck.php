<?php

class Solution
{
    /**
     * @param Integer[][] $boxTypes
     * @param Integer $truckSize
     * @return Integer
     */
    function maximumUnits($boxTypes, $truckSize)
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