<?php

class ListNode
{
    public $val = 0;
    public $next = null;

    function __construct($val = 0, $next = null)
    {
        $this->val = $val;
        $this->next = $next;
    }
}

class Solution
{
    /**
     * @param ListNode|null $head
     * @return ListNode|null
     */
    function middleNode(?ListNode $head): ?ListNode
    {
        $slow = $fast = $head;
        while ($fast && $fast->next) {
            list($slow, $fast) = array($slow->next, $fast->next->next);
        }
        return $slow;
    }
}
