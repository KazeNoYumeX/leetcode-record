<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection
 *  @noinspection PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    /**
     * @param  int  $x
     * @return bool
     */
    public function isPalindrome($x)
    {
        return "$x" === strrev("$x");
    }
}
