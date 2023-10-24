<?php

/**
 * Definition for a binary tree node.
 */
class TreeNode
{
    public $val = null;

    public $left = null;

    public $right = null;

    public function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

/**
 *  @noinspection PhpIllegalPsrClassPathInspection
 *  @noinspection PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    /**
     * @return int[][]
     */
    public function levelOrder(?TreeNode $root): array
    {
        $queue = [$root];
        $ret = [];

        while ($queue[0]) {
            $qLen = count($queue);
            $row = [];
            for ($i = 0; $i < $qLen; $i++) {
                $curr = array_shift($queue);
                if ($curr) {
                    $row[] = $curr->val;

                    if ($curr->left) {
                        $queue[] = $curr->left;
                    }

                    if ($curr->right) {
                        $queue[] = $curr->right;
                    }
                }
            }
            $ret[] = $row;
        }

        return $ret;
    }
}
