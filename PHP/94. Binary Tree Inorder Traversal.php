<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    /**
     * @return int[]
     */
    public function inorderTraversal(?TreeNode $root): array
    {
        $traversal = [];
        $this->inorder($root, $traversal);

        return $traversal;
    }

    private function inorder(?TreeNode $root, array &$traversal): void
    {
        if ($root === null) {
            return;
        }

        $this->inorder($root->left, $traversal);
        $traversal[] = $root->val;
        $this->inorder($root->right, $traversal);
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
