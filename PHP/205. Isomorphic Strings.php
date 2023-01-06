<?php

class Solution
{
    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic(string $s, string $t): bool
    {
        $obj = [];

        if (strlen($s) !== strlen($t)) {
            return false;
        }

        for ($i = 0; $i < strlen($s); $i++) {
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
