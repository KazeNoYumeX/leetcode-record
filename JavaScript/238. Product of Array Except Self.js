// noinspection JSUnusedGlobalSymbols

/**
 * @param {number[]} nums
 * @return {number[]}
 */
const productExceptSelf = (nums) => {
  const length = nums.length
  const result = Array(length).fill(1)

  let num = 1
  for (let i = length - 1; i >= 0; i--) {
    result[i] = num
    num *= nums[i]
  }

  num = 1
  for (let i = 0; i < length; i++) {
    result[i] *= num
    num *= nums[i]
  }

  return result
}
