// noinspection JSUnusedGlobalSymbols

/**
 * @param {number[]} nums
 * @return {number}
 */
const removeDuplicatesTwo = (nums) => {
  const length = nums.length

  if (length < 3) {
    return length
  }

  let left = 2

  for (let right = 2; right < length; right++) {
    if (nums[left - 2] !== nums[right]) {
      nums[left] = nums[right]
      left++
    }
  }

  return left
}
