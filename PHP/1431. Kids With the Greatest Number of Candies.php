<?php

/** @noinspection PhpMultipleClassDeclarationsInspection */

class Solution
{
    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     * @noinspection PhpUnused
     */
    function kidsWithCandies(array $candies, int $extraCandies): array
    {
        $max = max($candies);
        return array_map(fn($candy) => $candy + $extraCandies >= $max, $candies);
    }
}
