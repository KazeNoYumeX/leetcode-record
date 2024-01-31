<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection, PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    /**
     * @noinspection PhpUnused
     */
    public function reverseWords(string $s): string
    {
        $arr = array_diff(explode(' ', trim($s)), ['']);
        $reversed = array_reverse($arr);

        return implode(' ', $reversed);
    }
}
