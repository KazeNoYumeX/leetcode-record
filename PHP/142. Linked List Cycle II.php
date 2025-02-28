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
    public function detectCycle(?ListNode $head): ?ListNode
    {
        $slow = $fast = $head;
        while ($fast !== null && $fast->next !== null) {
            $slow = $slow->next;
            $fast = $fast->next->next;
            if ($slow === $fast) {
                $fast = $head;
                while ($slow !== $fast) {
                    $slow = $slow->next;
                    $fast = $fast->next;
                }

                return $slow;
            }
        }

        return null;
    }
}
