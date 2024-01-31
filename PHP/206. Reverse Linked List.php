<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection, PhpMultipleClassDeclarationsInspection, PhpMultipleClassesDeclarationsInOneFile
 */
class ListNode
{
    public mixed $val = 0;

    public mixed $next = null;

    public function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution
{
    /**
     * @noinspection PhpUnused
     */
    public function reverseList(?ListNode $head): ?ListNode
    {
        $prev = null;

        while ($head) {
            [$head->next, $prev, $head] = [$prev, $head, $head->next];
        }

        return $prev;
    }
}
