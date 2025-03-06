// noinspection JSUnusedGlobalSymbols

/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number[]}
 */
const twoSum = (nums, target) => {
  const map = {}

  for (let i = 0; i < nums.length; i++) {
    const current = nums[i]
    const key = target - current

    if (map[key] >= 0) {
      return [map[key], i]
    }

    map[current] = i
  }
  return null
}
