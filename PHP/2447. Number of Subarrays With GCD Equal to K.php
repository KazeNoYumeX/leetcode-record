<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    /**
     * @param  int[]  $nums
     */
    public function subarrayGCD(array $nums, int $k): int
    {
        $subArray = 0;
        $length = count($nums);

        for ($i = 0; $i < $length; $i++) {
            $current = $nums[$i];
            for ($j = $i; $j < $length && $nums[$j] % $k === 0; $j++) {
                $current = $this->gcd($current, $nums[$j]);
                if ($current === $k) {
                    $subArray++;
                }
            }
        }

        return $subArray;
    }

    private function gcd(int $former, int $latter): int
    {
        if ($latter === 0) {
            return $former;
        }

        return $this->gcd($latter, $former % $latter);
    }
}
