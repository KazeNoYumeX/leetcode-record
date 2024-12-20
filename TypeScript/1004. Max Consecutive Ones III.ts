// noinspection JSUnusedGlobalSymbols
const longestOnes = (nums: number[], k: number): number => {
  let left = 0,
    right = 0

  for (; right < nums.length; right++) {
    if (nums[right] == 0) {
      k--
    }

    if (k < 0 && nums[left++] == 0) {
      k++
    }
  }

  return right - left
}
