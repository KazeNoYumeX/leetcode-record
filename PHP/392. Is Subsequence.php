<?php

/** @noinspection PhpMultipleClassDeclarationsInspection */
class Solution
{
    /**
     * @noinspection PhpUnused
     */
    public function isSubsequence(string $s, string $t): bool
    {
        if (strlen($s) > strlen($t)) {
            return false;
        }

        $array = str_split($s);
        foreach ($array as $str) {
            if (! str_contains($t, $str)) {
                return false;
            }

            $t = substr($t, strpos($t, $str) + 1);
        }

        return true;
    }
}
