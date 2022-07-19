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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers(ListNode $l1, ListNode $l2): ?ListNode
    {
        $plus = bcadd($this->getNumber($l1), $this->getNumber($l2));
        $len = strlen($plus);
        $node = null;
        for ($i = 0; $i < $len; $i++) {
            $node = new ListNode($plus[$i], $node);
        }
        return $node;
    }

    function getNumber(ListNode $node): string
    {
        $res = '';
        while ($node->next) {
            $res .= $node->val;
            $node = $node->next;
        }
        return strrev($res . $node->val);
    }
}