<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    public function validPalindrome(string $s): bool
    {
        $length = strlen($s);
        if ($length <= 1) {
            return true;
        }

        $left = 0;
        $right = $length - 1;
        while ($left < $right) {
            if ($s[$left] !== $s[$right]) {
                return $this->palindrome($s, $left, $right - 1) || $this->palindrome($s, $left + 1, $right);
            }

            $left++;
            $right--;
        }

        return true;
    }

    private function palindrome(string $s, int $left, int $right): bool
    {
        while ($left < $right) {
            if ($s[$left] !== $s[$right]) {
                return false;
            }

            $left++;
            $right--;
        }

        return true;
    }
}
