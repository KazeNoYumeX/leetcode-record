// noinspection JSUnusedGlobalSymbols
const asteroidCollision = (asteroids: number[]): number[] => {
    const stack: number[] = []

    for (let i = 0; i < asteroids.length; i++) {
        const current = asteroids[i]

        if (current > 0) {
            stack.push(current)
        } else {
            const absCurrent = Math.abs(current)

            while (stack.length > 0 && stack[stack.length - 1] > 0 && stack[stack.length - 1] < absCurrent) {
                stack.pop()
            }

            const endStack = stack[stack.length - 1]
            const stackLength = stack.length

            if (stackLength > 0 && endStack === absCurrent) {
                stack.pop()
            } else if (stackLength === 0 || endStack < 0) {
                stack.push(current)
            }
        }
    }

    return stack
}
