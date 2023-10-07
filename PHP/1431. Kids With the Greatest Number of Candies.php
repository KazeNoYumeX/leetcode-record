<?php

/** @noinspection PhpMultipleClassDeclarationsInspection */
class Solution
{
    /**
     * @param  int[]  $candies
     * @return bool[]
     *
     * @noinspection PhpUnused
     */
    public function kidsWithCandies(array $candies, int $extraCandies): array
    {
        $max = max($candies);

        return array_map(fn ($candy) => $candy + $extraCandies >= $max, $candies);
    }
}
