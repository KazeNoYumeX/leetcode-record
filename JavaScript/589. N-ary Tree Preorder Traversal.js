/**
 * // Definition for a Node.
 * function Node(val, children) {
 *    this.val = val;
 *    this.children = children;
 * };
 */

/**
 * @param {Node|null} root
 * @return {number[]}
 */

const preorder = (root) => {
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