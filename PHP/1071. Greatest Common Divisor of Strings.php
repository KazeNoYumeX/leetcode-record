<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    public function gcdOfStrings(string $str1, string $str2): string
    {
        if ($str1.$str2 !== $str2.$str1) {
            return '';
        }

        return substr($str1, 0, $this->gcd(strlen($str1), strlen($str2)));
    }

    /** Euclidean Algorithm */
    public function gcd(int $former, int $latter): int
    {
        if ($latter === 0) {
            return $former;
        }

        return $this->gcd($latter, $former % $latter);
    }
}
