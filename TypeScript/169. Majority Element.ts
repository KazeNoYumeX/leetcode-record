// noinspection JSUnusedGlobalSymbols

const majorityElement = (nums: number[]): number => {
  let count = 1
  let majority = nums[0]

  for (let i = 0; i < nums.length; i++) {
    if (count === 0) {
      majority = nums[i]
      count = 1
    } else if (majority === nums[i]) {
      count++
    } else {
      count--
    }
  }

  return majority
}
