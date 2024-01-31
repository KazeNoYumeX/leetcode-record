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
    public function middleNode(?ListNode $head): ?ListNode
    {
        $slow = $fast = $head;
        while ($fast && $fast->next) {
            [$slow, $fast] = [$slow->next, $fast->next->next];
        }

        return $slow;
    }
}
