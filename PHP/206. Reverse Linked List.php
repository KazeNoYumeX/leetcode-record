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
    public function reverseList(?ListNode $head): ?ListNode
    {
        return $this->reverse($head, null);
    }

    private function reverse(?ListNode $head, ?ListNode $next): ?ListNode
    {
        if ($head === null) {
            return $next;
        }

        $current = $head->next;
        $head->next = $next;

        return $this->reverse($current, $head);
    }
}
