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
     */
    public function findGCD(array $nums): int
    {
        $min = min($nums);
        $max = max($nums);

        return $this->gcd($min, $max);
    }

    private function gcd(int $min, int $max): int
    {
        return $max === 0 ? $min : $this->gcd($max, $min % $max);
    }
}
