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
    public function maxLength(array $nums): int
    {
        $length = count($nums);
        $subArray = 1;

        for ($i = 0; $i < $length; $i++) {
            $product = $nums[$i];
            $gcd = $product;
            $lcm = $product;
            for ($j = $i + 1; $j < $length; $j++) {
                $product *= $nums[$j];
                $gcd = $this->gcd($gcd, $nums[$j]);
                $lcm = $this->lcm($lcm, $nums[$j]);
                if ($product === $gcd * $lcm) {
                    $subArray = max($subArray, $j - $i + 1);
                }
            }
        }

        return $subArray;
    }

    private function lcm(int $former, int $latter): int
    {
        return ($former * $latter) / $this->gcd($former, $latter);
    }

    private function gcd(int $former, int $latter): int
    {
        if ($latter === 0) {
            return $former;
        }

        return $this->gcd($latter, $former % $latter);
    }
}
