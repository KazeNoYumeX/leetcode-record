const runningSum = (nums: number[]): number[] => {
    nums.reduce((accumulator: number, current: number, idx: number, arr: number[]) => arr[idx] += accumulator)
    return nums
}
