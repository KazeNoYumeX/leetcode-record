const TreeNode = (val, left, right) => {
    this.val = (val === undefined ? 0 : val)
    this.left = (left === undefined ? null : left)
    this.right = (right === undefined ? null : right)
}

/**
 * @param {TreeNode} root1
 * @param {TreeNode} root2
 * @return {TreeNode}
 */
const mergeTrees = (root1, root2) => {
    if (!root1)
        return root2;

    if (!root2)
        return root1;

    return new TreeNode(
        root1.val + root2.val,
        mergeTrees(root1.left, root2.left),
        mergeTrees(root1.right, root2.right)
    )
};