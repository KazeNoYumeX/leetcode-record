<?php

/** @noinspection PhpMultipleClassDeclarationsInspection */
class Solution
{
    public function gcd(int $a, int $b): int
    {
        // Euclidean Algorithm
        return $b === 0 ? $a : $this->gcd($b, $a % $b);
    }

    /** @noinspection PhpUnused */
    public function gcdOfStrings(string $str1, string $str2): string
    {
        if ($str1.$str2 !== $str2.$str1) {
            return '';
        }

        return substr($str1, 0, $this->gcd(strlen($str1), strlen($str2)));
    }
}
