const fib = (n) => {
    const exist = {}

    const helper = (num) => {
        if (num in exist) {
            return exist[num]
        }
        if (num === 0) return 0
        if (num === 1) return 1
        return exist[num] = helper(num - 1) + helper(num - 2)
    }
    return helper(n)
};