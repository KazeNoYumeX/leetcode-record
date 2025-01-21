<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    public function minDepth(?TreeNode $root): int
    {
        if ($root === null) {
            return 0;
        }

        $depth = 1;

        $queue = new SplQueue;
        $queue->enqueue($root);

        while (! $queue->isEmpty()) {
            $size = $queue->count();

            for ($i = 0; $i < $size; $i++) {
                $node = $queue->dequeue();

                if ($node->left === null && $node->right === null) {
                    return $depth;
                }

                if ($node->left !== null) {
                    $queue->enqueue($node->left);
                }

                if ($node->right !== null) {
                    $queue->enqueue($node->right);
                }
            }

            $depth++;
        }

        return $depth;
    }
}

class TreeNode
{
    public ?int $val = null;

    public ?TreeNode $left = null;

    public ?TreeNode $right = null;

    public function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}
