<?php

class Solution
{
    public array $exist = [];

    /**
     * @param int $num
     * @return Integer
     */
    function helper(int $num): int
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

    /**
     * @param Integer $n
     * @return Integer
     */
    function fib(int $n): int
    {
        return $this->helper($n);
    }
}