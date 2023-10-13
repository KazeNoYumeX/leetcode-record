<?php

class Solution
{
    /**
     * @param  int[]  $prices
     */
    public function maxProfit(array $prices): int
    {
        [$maxCurr, $maxSoFar] = [0, 0];
        for ($i = 1; $i < count($prices); $i++) {
            $maxCurr = max(0, $maxCurr + $prices[$i] - $prices[$i - 1]);
            $maxSoFar = max($maxCurr, $maxSoFar);
        }

        return $maxSoFar;
    }
}
