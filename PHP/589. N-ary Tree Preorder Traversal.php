<?php

class Node
{
    public $val = null;
    public ?array $children = null;

    function __construct($val = 0)
    {
        $this->val = $val;
        $this->children = array();
    }
}

class Solution
{
    /**
     * @param Node $root
     * @return integer[]
     */
    function preorder(Node $root): array
    {
        $ret = [];
        $q = [$root];

        while (!empty($q)) {
            $node = array_pop($q);
            if (!empty($node)) {
                $ret[] = $node->val;
                if (!empty($node->children)) {
                    $node->children = array_reverse($node->children);
                    $q = array_merge($q, array_filter($node->children));
                }
            }
        }
        return $ret;
    }
}