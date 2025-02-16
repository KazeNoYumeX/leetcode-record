<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    public function myPow(float $x, int $n): float
    {
        if ($n < 0) {
            $x = 1 / $x;
            $n = -$n;
        }

        return $this->fastPow($x, $n);
    }

    public function fastPow(float $x, int $n): float
    {
        if ($n === 0) {
            return 1.0;
        }

        $half = $this->fastPow($x, (int) ($n / 2));

        return $n % 2 === 0 ? $half * $half : $half * $half * $x;
    }
}
