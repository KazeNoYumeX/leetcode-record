<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection
 *  @noinspection PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    public function lengthOfLongestSubstring(string $s): int
    {
        if (empty($s)) {
            return 0;
        }

        $set = [];
        $count = [];
        $string = str_split($s);

        for ($i = 0; $i < count($string); $i++) {
            if (in_array($string[$i], $set)) {
                $length = count(array_slice($set, 0, array_search($string[$i], $set) + 1));
                array_splice($set, 0, $length);
            }

            $set[] = $string[$i];
            $count[] = count($set);
        }

        return max($count);
    }
}
