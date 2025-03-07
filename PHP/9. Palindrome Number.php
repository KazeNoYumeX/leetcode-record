<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    public function isPalindrome(int $x): bool
    {
        return "$x" === strrev("$x");
    }
}
