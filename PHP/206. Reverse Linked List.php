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
    function reverseList(?ListNode $head): ?ListNode
    {
        $prev = null;

        while ($head) {
            list($head->next, $prev, $head) = array($prev, $head, $head->next);
        }
        return $prev;
    }
}