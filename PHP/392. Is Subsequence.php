<?php

class Solution
{
    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence(string $s, string $t): bool
    {
        if (strlen($s) > strlen($t)) {
            return false;
        }

        $array = str_split($s);
        foreach ($array as $str) {
            if (strpos($t, $str) === false) {
                return false;
            }

            $t = substr($t, strpos($t, $str) + 1);
        }
        return true;
    }
}