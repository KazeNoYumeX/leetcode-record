<?php

/** @noinspection PhpMultipleClassDeclarationsInspection */

class Solution {

    /**
     * @param  String  $word1
     * @param  String  $word2
     *
     * @return String
     * @noinspection PhpUnused*/
    function mergeAlternately(String $word1, string $word2): string
    {
        $result = '';
        $length = max(strlen($word1),strlen($word2));

        for ($i=0; $i < $length; $i++) {
            $result .= (($word1[$i] ?? '') . ($word2[$i] ?? ''));
        }

        return $result;
    }
}
