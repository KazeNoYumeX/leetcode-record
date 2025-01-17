// noinspection JSUnusedGlobalSymbols
const pivotIndex = (nums: number[]): number => {
  let left = 0
  let right = nums.reduce((a, b) => a + b, 0)

  for (let i = 0; i < nums.length; i++) {
    const current = nums[i]

    if (left === (right -= current)) {
      return i
    }

    left += current
  }
  return -1
}
