<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    public function reverseWords(string $s): string
    {
        $arr = array_diff(explode(' ', trim($s)), ['']);
        $reversed = array_reverse($arr);

        return implode(' ', $reversed);
    }
}
