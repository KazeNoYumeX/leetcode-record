// noinspection JSUnusedGlobalSymbols
/**
 * @param {number[]} nums
 * @return {void} Do not return anything, modify nums in-place instead.
 */
const moveZeroes = function (nums) {
  const length = nums.length
  let zeroSize = 0

  for (let i = 0; i < length; i++) {
    if (nums[i] === 0) {
      zeroSize++
    } else if (zeroSize > 0) {
      nums[i - zeroSize] = nums[i]
      nums[i] = 0
    }
  }
}
