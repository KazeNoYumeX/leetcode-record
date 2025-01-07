<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    public function mergeAlternately(string $word1, string $word2): string
    {
        $result = '';
        $length = max(strlen($word1), strlen($word2));

        for ($i = 0; $i < $length; $i++) {
            $result .= (($word1[$i] ?? '').($word2[$i] ?? ''));
        }

        return $result;
    }
}
