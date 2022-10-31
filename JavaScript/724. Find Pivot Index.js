/**
 * @param {number[]} nums
 * @return {number}
 */
const pivotIndex = (nums) => {
    let right = nums.reduce((a, c) => a + c, 0)
    let left = 0

    for (let i = 0; i < nums.length; i++) {
        const current = nums[i]
        right -= current

        if (left === right) {
            return i
        }
        left += current
    }
    return -1
}
