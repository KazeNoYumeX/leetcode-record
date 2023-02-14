/**
 * @param {number[]} nums
 * @return {number[]}
 */
const runningSum = (nums) => {
    nums.reduce((accumulator, current, idx, arr) => arr[idx] += accumulator)
    return nums
}
