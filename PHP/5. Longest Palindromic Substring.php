<?php

class Solution
{
    private string $longest;
    private string $str;
    private int $len;

    public function __construct()
    {
        $this->longest = '';
        $this->str = '';
        $this->len = 0;
    }


    /**
     * @param int $str1
     * @param int $str2
     * @return void
     */
    public function expand(int $str1, int $str2)
    {
        while ($str1 >= 0 && $str2 < $this->len && $this->str[$str1] === $this->str[$str2]) {
            $end = $str2 - $str1 + 1;
            if ($end > strlen($this->longest)) {
                $this->longest = substr($this->str, $str1, $end);
            }
            $str1--;
            $str2++;
        }
    }

    /**
     * @param String $s
     * @return String
     */
    public function longestPalindrome(string $s): string
    {
        $len = strlen($s);

        if ($len <= 1) {
            return $s;
        }

        $this->str = $s;
        $this->len = $len;

        for ($i = 0; $i < $len; $i++) {
            $this->expand($i, $i);
            $this->expand($i, $i + 1);
        }

        return $this->longest;
    }
}