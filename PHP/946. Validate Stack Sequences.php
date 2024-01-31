<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection, PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    /**
     * @param  int[]  $pushed
     * @param  int[]  $popped
     *
     * @noinspection PhpUnused
     */
    public function validateStackSequences(array $pushed, array $popped): bool
    {
        $stack = [];
        $num = 0;

        for ($i = 0; $i < count($pushed); $i++) {
            $stack[] = $pushed[$i];
            while ($stack && $stack[count($stack) - 1] === $popped[$num]) {
                array_pop($stack);
                $num++;
            }
        }

        return $num === count($popped);
    }
}
