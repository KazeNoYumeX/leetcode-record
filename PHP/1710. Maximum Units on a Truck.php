<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    /**
     * @param  int[][]  $boxTypes
     */
    public function maximumUnits(array $boxTypes, int $truckSize): int
    {
        $boxes = 0;

        usort($boxTypes, fn ($a, $b) => usort($boxTypes, fn ($a, $b) => $b[1] <=> $a[1]));

        foreach ($boxTypes as $box) {
            $amount = min($box[0], $truckSize);
            $boxes += $amount * $box[1];
            $truckSize -= $amount;

            if ($truckSize === 0) {
                break;
            }
        }

        return $boxes;
    }
}
