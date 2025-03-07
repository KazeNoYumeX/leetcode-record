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
    public function subarrayLCM(array $nums, int $k): int
    {
        $subArray = 0;
        $length = count($nums);

        for ($i = 0; $i < $length; $i++) {
            $current = 1;
            for ($j = $i; $j < $length && $current <= $k; $j++) {
                $current = $this->lcm($current, $nums[$j]);
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

    private function lcm(int $former, int $latter): int
    {
        return ($former * $latter) / $this->gcd($former, $latter);
    }
}
