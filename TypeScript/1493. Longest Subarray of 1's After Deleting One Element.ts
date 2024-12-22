// noinspection JSUnusedGlobalSymbols
const longestSubarray = (nums: number[]): number => {
  let left = 0
  let right = 0

  for (let remove = 1; right < nums.length; right++) {
    if (nums[right] == 0) {
      remove--
    }

    if (remove < 0 && nums[left++] == 0) {
      remove++
    }
  }

  return right - left - 1
}
