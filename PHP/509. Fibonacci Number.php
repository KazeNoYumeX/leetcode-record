<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection
 *  @noinspection PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    public array $exist = [];

    public function helper(int $num): int
    {
        if (array_key_exists($num, $this->exist)) {
            return $this->exist[$num];
        }

        if ($num === 0) {
            return 0;
        }
        if ($num === 1) {
            return 1;
        }

        return $this->exist[$num] = $this->helper($num - 1) + $this->helper($num - 2);
    }

    public function fib(int $n): int
    {
        return $this->helper($n);
    }
}
