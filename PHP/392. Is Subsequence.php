<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    /**
     * @noinspection PhpUnused
     */
    public function isSubsequence(string $s, string $t): bool
    {
        $lengthS = strlen($s);
        $lengthT = strlen($t);

        if ($lengthS > $lengthT) {
            return false;
        }

        if ($lengthS === 0) {
            return true;
        }

        $subsequence = 0;

        for ($i = 0; $i < $lengthT; $i++) {
            if ($s[$subsequence] === $t[$i]) {
                $subsequence++;
            }
        }

        return $lengthS === $subsequence;
    }
}
