// noinspection JSUnusedGlobalSymbols

const validateStackSequences = (pushed: number[], popped: number[]): boolean => {
    const stack: number[] = []
    let num: number = 0

    for (let i: number = 0; i < pushed.length; i++) {
        stack.push(pushed[i])
        while (stack.length && stack[stack.length - 1] === popped[num]) {
            stack.pop()
            num++
        }
    }

    return stack.length === 0
}
