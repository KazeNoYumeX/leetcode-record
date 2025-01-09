<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    /**
     * @param  int[]  $candies
     * @return bool[]
     */
    public function kidsWithCandies(array $candies, int $extraCandies): array
    {
        $max = max($candies);

        return array_map(fn ($candy) => $candy + $extraCandies >= $max, $candies);
    }
}
