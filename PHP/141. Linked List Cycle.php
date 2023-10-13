<?php

class ListNode
{
    public $val = 0;

    public $next = null;

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
        while ($fast && $fast->next) {
            [$slow, $fast] = [$slow->next, $fast->next->next];
            if ($slow === $fast) {
                return true;
            }
        }

        return false;
    }
}
