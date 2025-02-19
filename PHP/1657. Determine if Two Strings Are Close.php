<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    public function closeStrings(string $word1, string $word2): bool
    {
        if (strlen($word1) !== strlen($word2)) {
            return false;
        }

        $word1Map = [];
        $word2Map = [];

        for ($i = 0; $i < strlen($word1); $i++) {
            $char1 = $word1[$i];
            $char2 = $word2[$i];

            $word1Map[$char1] = isset($word1Map[$char1]) ? $word1Map[$char1] + 1 : 1;
            $word2Map[$char2] = isset($word2Map[$char2]) ? $word2Map[$char2] + 1 : 1;
        }

        if (count($word1Map) !== count($word2Map)) {
            return false;
        }

        foreach ($word2Map as $key => $value) {
            if (! array_key_exists($key, $word1Map)) {
                return false;
            }
        }

        $word1Map = array_values($word1Map);
        $word2Map = array_values($word2Map);

        sort($word1Map);
        sort($word2Map);

        return $word1Map === $word2Map;
    }
}
