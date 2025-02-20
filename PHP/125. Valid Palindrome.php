<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    public function isPalindrome(string $s): bool
    {
        $s = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($s));
        $length = strlen($s);
        if ($length <= 1) {
            return true;
        }

        $left = 0;
        $right = $length - 1;

        while ($left < $right) {
            if ($s[$left] === $s[$right]) {
                $left++;
                $right--;
            } else {
                return false;
            }
        }

        return true;
    }
}
