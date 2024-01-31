<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection, PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    public function numSquares(int $n): int
    {
        $dp = [];
        $dp[0] = 0;
        for ($i = 0; $i <= $n; $i++) {
            for ($j = 1; ($i + $j * $j) <= $n; $j++) {
                if ($dp[$i + $j * $j] === null) {
                    $dp[$i + $j * $j] = $i + $j * $j;
                }
                $dp[$i + $j * $j] = min($dp[$i + $j * $j], $dp[$i] + 1);
            }
        }

        return $dp[$n];
    }
}
