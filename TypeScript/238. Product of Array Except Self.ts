// noinspection JSUnusedGlobalSymbols

const productExceptSelf = (nums: number[]): number[] => {
    const numCount = nums.length
    const result: number[] = Array(numCount).fill(1)

    let num = 1
    for (let i = numCount - 1; i >= 0; i--) {
        result[i] = num
        num *= nums[i]
    }

    num = 1
    for (let i = 0; i < numCount; i++) {
        result[i] *= num
        num *= nums[i]
    }

    return result
}
