// noinspection JSUnusedGlobalSymbols

/**
 * @param {TreeNode} root
 * @return {number[][]}
 */
const levelOrder = (root) => {
  if (!root) return []

  const nodes = [root]
  const tree = []

  while (nodes[0]) {
    const length = nodes.length
    const row = []

    for (let i = 0; i < length; i++) {
      const node = nodes.shift()
      if (node) {
        row.push(node.val)

        if (node.left) nodes.push(node.left)

        if (node.right) nodes.push(node.right)
      }
    }
    tree.push(row)
  }
  return tree
}

/**
 * Definition for a binary tree node.
 */
const TreeNode = function (val = 0, left = null, right = null) {
  this.val = val
  this.left = left
  this.right = right
}
