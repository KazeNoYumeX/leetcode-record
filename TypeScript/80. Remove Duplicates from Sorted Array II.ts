// noinspection JSUnusedGlobalSymbols

const removeDuplicatesTwo = (nums: number[]): number => {
  const length: number = nums.length

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
