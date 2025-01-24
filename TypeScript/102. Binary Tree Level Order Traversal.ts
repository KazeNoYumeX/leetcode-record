// noinspection JSUnusedGlobalSymbols
const levelOrder = (root: TreeNode | null): number[][] => {
  if (!root) return []

  const nodes: TreeNode[] = [root]
  const tree: number[][] = []

  while (nodes[0]) {
    const length: number = nodes.length
    const row: number[] = []
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
class TreeNode {
  val: number
  left: TreeNode | null
  right: TreeNode | null

  constructor(val?: number, left?: TreeNode | null, right?: TreeNode | null) {
    this.val = val === undefined ? 0 : val
    this.left = left === undefined ? null : left
    this.right = right === undefined ? null : right
  }
}
