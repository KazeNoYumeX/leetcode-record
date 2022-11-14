/**
 * Definition for node.
 * class Node {
 *     val: number
 *     children: Node[]
 *     constructor(val?: number) {
 *         this.val = (val===undefined ? 0 : val)
 *         this.children = []
 *     }
 * }
 */

interface Node {
    val: number | undefined
    children: Node[]
}

const preorder = (root: Node | null): number[] => {
    const ret = []
    const q = [root]

    while (q.length) {
        const node = q.pop()
        if (node) {
            const {children, val} = node
            ret.push(val)
            if (children) {
                children.reverse()
                children.forEach(node => {
                    if (node) q.push(node)
                })
            }
        }
    }
    return ret
}