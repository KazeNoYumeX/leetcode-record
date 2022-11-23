const numSquares = (n: number): number => {
    const sq: number[] = [...Array(n).keys()].map(num => num * num).filter(num => 0 < num && num <= n)
    const queue: { node: number, d: number }[] = [{node: n, d: 1}]
    const seen = new Set()
    seen.add(n)
    while (queue) {
        const curr = queue.shift()

        if (!curr) {
            break
        }

        const {node, d}: any = curr

        if (sq.indexOf(node) !== -1) {
            return d
        }

        for (let i = 0; i < sq.length; i++) {
            if (node <= sq[i]) {
                break
            }

            const left: number = node - sq[i]
            if (!seen.has(left)) {
                seen.add(left)
                queue.push({node: left, d: d + 1})
            }
        }
    }
    return n
}