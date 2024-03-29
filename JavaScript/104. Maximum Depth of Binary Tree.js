// Definition for a binary tree node.
const TreeNode = (val, left, right) => {
    this.val = (val === undefined ? 0 : val)
    this.left = (left === undefined ? null : left)
    this.right = (right === undefined ? null : right)
}

/**
 * @param {TreeNode} root
 * @return {number}
 */
const maxDepth = (root) => !(root === undefined || root === null) ? Math.max(maxDepth(root.left), maxDepth(root.right)) + 1 : 0
