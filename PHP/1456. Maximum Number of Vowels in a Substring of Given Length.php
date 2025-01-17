<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    public function maxVowels(string $s, int $k): int
    {
        $max = 0;
        $vowels = [
            'a' => true, 'e' => true, 'i' => true, 'o' => true, 'u' => true,
        ];

        for ($i = 0; $i < $k; $i++) {
            if (array_key_exists($s[$i], $vowels)) {
                $max++;
            }
        }

        $current = $max;
        for ($i = $k; $i < strlen($s); $i++) {
            if (array_key_exists($s[$i - $k], $vowels)) {
                $current--;
            }

            if (array_key_exists($s[$i], $vowels)) {
                $current++;
            }

            if ($current > $max) {
                $max = $current;
            }
        }

        return $max;
    }
}
