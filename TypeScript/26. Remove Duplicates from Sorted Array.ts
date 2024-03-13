// noinspection JSUnusedGlobalSymbols

const removeDuplicates = (nums: number[]): number => {
  let left: number = 0

  for (let right: number = 1; right < nums.length; right++) {
    if (nums[left] !== nums[right]) {
      nums[++left] = nums[right]
    }
  }

  return left + 1
}
