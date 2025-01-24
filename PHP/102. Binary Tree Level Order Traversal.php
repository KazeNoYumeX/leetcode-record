<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    /**
     * @return int[][]
     */
    public function levelOrder(?TreeNode $root): array
    {
        if (! $root) {
            return [];
        }

        $nodes = new SplQueue;
        $nodes->enqueue($root);

        $tree = [];

        while ($nodes->count() > 0) {
            $length = count($nodes);
            $row = [];

            for ($i = 0; $i < $length; $i++) {
                $node = $nodes->dequeue();

                if ($node) {
                    $row[] = $node->val;

                    if ($node->left) {
                        $nodes[] = $node->left;
                    }

                    if ($node->right) {
                        $nodes[] = $node->right;
                    }
                }
            }

            $tree[] = $row;
        }

        return $tree;
    }
}

/**
 * Definition for a binary tree node.
 */
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
