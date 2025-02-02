<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    public function removeStars(string $s): string
    {
        $array = [];

        for ($i = 0; $i < strlen($s); $i++) {
            $word = $s[$i];
            if ($word === '*') {
                array_pop($array);
            } else {
                $array[] = $word;
            }
        }

        return implode('', $array);
    }
}
