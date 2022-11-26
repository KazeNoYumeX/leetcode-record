/**
 * Definition for a binary tree node.
 */
class TreeNode {
    val: number
    left: TreeNode | null
    right: TreeNode | null

    constructor(val?: number, left?: TreeNode | null, right?: TreeNode | null) {
        this.val = (val === undefined ? 0 : val)
        this.left = (left === undefined ? null : left)
        this.right = (right === undefined ? null : right)
    }
}

const levelOrder = (root: TreeNode | null): number[][] => {
    const queue: (TreeNode | null)[] = [root]
    const ret: number[][] = [];

    while (queue[0]) {
        const qLen: number = queue.length
        const row: number[] = []
        for (let i = 0; i < qLen; i++) {
            const curr = queue.shift()
            if (curr) {
                row.push(curr.val)

                if (curr.left)
                    queue.push(curr.left)

                if (curr.right)
                    queue.push(curr.right)
            }
        }
        ret.push(row)
    }
    return ret
}