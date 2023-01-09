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
     * @param ListNode $head
     * @return ListNode
     */
    function detectCycle($head)
    {
        $map = new splObjectStorage();
        while ($head) {
            if ($map->offsetExists($head)) return $head;
            $map->attach($head);
            $head = $head->next;
        }

        return $head;
    }
}