<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class ListNode
{
    public int $val = 0;

    public ?ListNode $next = null;

    public function __construct($val = 0)
    {
        $this->val = $val;
    }
}

class Solution
{
    public function hasCycle(?ListNode $head): bool
    {
        $slow = $fast = $head;
        while ($fast !== null && $fast->next !== null) {
            $slow = $slow->next;
            $fast = $fast->next->next;
            if ($slow === $fast) {
                return true;
            }
        }

        return false;
    }
}
