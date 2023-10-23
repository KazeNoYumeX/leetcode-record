<?php

/** @noinspection PhpMultipleClassDeclarationsInspection */
class Solution
{
    /**
     * @param  string[]  $chars
     *
     * @noinspection PhpUnused
     */
    public function compress(array &$chars): int
    {
        $length = count($chars);
        $index = 0;

        for ($i = 0; $i < $length;) {
            $currentChar = $chars[$i];
            $count = 0;

            while ($i < $length && $chars[$i] === $currentChar) {
                $count++;
                $i++;
            }

            $chars[$index++] = $currentChar;

            if ($count > 1) {
                foreach (str_split($count) as $char) {
                    $chars[$index++] = $char;
                }
            }
        }

        return $index;
    }
}
