<?php

/** @noinspection PhpMultipleClassDeclarationsInspection */
class ListNode
{
    public mixed $val = 0;

    public mixed $next = null;

    public function __construct($val = 0)
    {
        $this->val = $val;
    }
}

class Solution
{
    /**
     * @noinspection PhpUnused
     */
    public function detectCycle(?ListNode $head): ?ListNode
    {
        $map = new splObjectStorage();
        while ($head) {
            if ($map->offsetExists($head)) {
                return $head;
            }
            $map->attach($head);
            $head = $head->next;
        }

        return $head;
    }
}
