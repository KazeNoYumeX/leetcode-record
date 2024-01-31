<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection, PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    /**
     * @noinspection PhpUnused
     */
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

        $secondVowels = $max;
        for ($i = $k; $i < strlen($s); $i++) {
            if (array_key_exists($s[$i - $k], $vowels)) {
                $secondVowels--;
            }

            if (array_key_exists($s[$i], $vowels)) {
                $secondVowels++;
            }

            if ($secondVowels > $max) {
                $max = $secondVowels;
            }
        }

        return $max;
    }
}
