<?php

class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val = 0)
    {
        $this->val = $val;
    }
}

class Solution
{
    /**
     * @param ListNode|null $head
     * @return Boolean
     */
    function hasCycle(?ListNode $head): bool
    {
        $slow = $fast = $head;
        while ($fast && $fast->next) {
            list($slow, $fast) = array($slow->next, $fast->next->next);
            if ($slow === $fast) {
                return true;
            }
        }
        return false;
    }
}
