<?php

/** @noinspection PhpMultipleClassDeclarationsInspection */
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
    public function mergeTwoLists(?ListNode $list1, ?ListNode $list2): ?ListNode
    {
        if (empty($list1)) {
            return $list2;
        }

        if (empty($list2)) {
            return $list1;
        }

        if ($list1->val < $list2->val) {
            $list1->next = $this->mergeTwoLists($list1->next, $list2);

            return $list1;
        } else {
            $list2->next = $this->mergeTwoLists($list1, $list2->next);

            return $list2;
        }
    }
}
