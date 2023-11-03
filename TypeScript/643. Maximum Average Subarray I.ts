// noinspection JSUnusedGlobalSymbols
const findMaxAverage = (nums: number[], k: number): number => {
    let sum = 0
    let max = -Infinity

    for (let i = 0; i < nums.length; i++) {
        if (i > k - 1) {
            sum -= nums[i - k]
        }

        sum += nums[i]

        if (i >= k - 1) {
            if (sum > max) {
                max = sum
            }
        }
    }

    return max / k
}
