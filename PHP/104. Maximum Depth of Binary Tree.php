<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection, PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    /**
     * @param  TreeNode  $root
     * @return int
     */
    public function maxDepth($root)
    {
        return empty($root) ? 0 : max($this->maxDepth($root->left), $this->maxDepth($root->right)) + 1;
    }
}
