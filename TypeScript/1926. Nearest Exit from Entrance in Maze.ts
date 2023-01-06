const nearestExit = (maze: string[][], entrance: number[]): number => {
    const width: number = maze.length, length: number = maze[0].length

    const isExit = (x: number, y: number): boolean => {
        if (x === 0 || y === 0 || x === width - 1 || y === length - 1) {
            return x !== entrance[0] || y !== entrance[1]
        }
        return false
    }

    const quits: number[][] = [entrance]
    maze[entrance[0]][entrance[1]] = 'x'

    let steps: number = 0

    const dir: number[][] = [
        [-1, 0],
        [1, 0],
        [0, -1],
        [0, 1]
    ]

    while (quits.length) {
        const qLen: number = quits.length

        for (let i = 0; i < qLen; i++) {
            const curr = quits.shift()
            if (curr) {
                const [x, y]: number[] = curr

                if (isExit(x, y))
                    return steps

                for (const [dx, dy] of dir) {
                    const nx: number = x + dx
                    const ny: number = y + dy

                    if (nx >= 0 && nx < width && ny >= 0 && ny < length && maze[nx][ny] === '.') {
                        maze[nx][ny] = 'x'
                        quits.push([nx, ny])
                    }
                }
            }
        }
        steps++
    }
    return -1
}
