<?php

/** @noinspection PhpMultipleClassDeclarationsInspection */

class Solution
{
    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     * @noinspection PhpUnused
     */
    function isIsomorphic(string $s, string $t): bool
    {
        $count = strlen($s);
        if ($count !== strlen($t)) {
            return false;
        }

        $obj = [];

        for ($i = 0; $i < $count; $i++) {
            if (isset($obj[$s[$i]])) {
                if ($obj[$s[$i]] !== $t[$i]) {
                    return false;
                }
            } else {
                if (in_array($t[$i], $obj)) {
                    return false;
                }
                $obj[$s[$i]] = $t[$i];
            }
        }
        return true;
    }
}
