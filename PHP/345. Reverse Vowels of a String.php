<?php

/** @noinspection PhpMultipleClassDeclarationsInspection */
class Solution {

    /**
     * @param String $s
     *
     * @return String
     * @noinspection PhpUnused
     */
    public function reverseVowels(string $s): string
    {
        $length = strlen($s);

        if ($length <= 1) {
            return $s;
        }

        $vowels = [
            'a' => true, 'e' => true, 'i' => true, 'o' => true, 'u' => true,
        ];
        $left = 0;
        $right = $length - 1;

        while ($left < $length) {
            if ($left >= $right) {
                break;
            }

            if (array_key_exists(strtolower($s[$left]), $vowels)) {
                while ($right > $left) {
                    if (array_key_exists(strtolower($s[$right]), $vowels)) {
                        [$s[$left], $s[$right]] = [$s[$right], $s[$left]];
                        $right--;
                        break;
                    }

                    $right--;
                }
            }

            $left++;
        }

        return $s;
    }
}
