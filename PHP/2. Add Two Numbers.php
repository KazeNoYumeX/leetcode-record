<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection, PhpMultipleClassDeclarationsInspection, PhpMultipleClassesDeclarationsInOneFile
 */
class ListNode
{
    public $val = 0;

    public $next = null;

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
    public function addTwoNumbers(ListNode $l1, ListNode $l2): ?ListNode
    {
        $plus = bcadd($this->getNumber($l1), $this->getNumber($l2));
        $len = strlen($plus);
        $node = null;
        for ($i = 0; $i < $len; $i++) {
            $node = new ListNode($plus[$i], $node);
        }

        return $node;
    }

    public function getNumber(ListNode $node): string
    {
        $res = '';
        while ($node->next) {
            $res .= $node->val;
            $node = $node->next;
        }

        return strrev($res.$node->val);
    }
}
