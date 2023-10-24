<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection
 *  @noinspection PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    public function longestPalindrome(string $s): int
    {
        if (empty($s) || empty(strlen($s))) {
            return 0;
        }

        $count = 0;
        $check = [];
        for ($i = 0; $i < strlen($s); $i++) {
            if (isset($check[$s[$i]])) {
                unset($check[$s[$i]]);
                $count++;
            } else {
                $check[$s[$i]] = 1;
            }
        }
        if (count($check) != 0) {
            return $count * 2 + 1;
        }

        return $count * 2;
    }
}
