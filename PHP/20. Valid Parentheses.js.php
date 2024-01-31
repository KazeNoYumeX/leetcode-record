<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection, PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    /**
     * @param  string  $s
     * @return bool
     */
    public function isValid($s)
    {
        $len = strlen($s);

        if ($len % 2 !== 0) {
            return false;
        }

        $stack = [];
        $close = [
            '}' => '{',
            ']' => '[',
            ')' => '(',
        ];

        for ($i = 0; $i < $len; $i++) {
            if (array_key_exists($s[$i], $close)) {
                $stack[] = $s[$i];
            } else {
                $last = array_pop($stack);
                if ($last === $close[$s[$i]]) {
                    continue;
                } else {
                    return false;
                }
            }
        }

        return count($stack) === 0;
    }
}
