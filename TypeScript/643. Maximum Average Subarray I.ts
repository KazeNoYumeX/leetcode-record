// noinspection JSUnusedGlobalSymbols
const findMaxAverage = (nums: number[], k: number): number => {
  let left = 0
  let right = 0
  let average = -Infinity
  let sum = 0

  while (right < nums.length) {
    const window = right - left + 1

    sum += nums[right]

    if (window == k) {
      average = Math.max(sum / k, average)

      sum -= nums[left]
      left++
    }

    right++
  }

  return average
}
