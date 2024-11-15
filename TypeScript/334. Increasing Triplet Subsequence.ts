// noinspection JSUnusedGlobalSymbols
const increasingTriplet = (nums: number[]): boolean => {
  const length = nums.length

  if (length < 3) {
    return false
  }

  let first = Number.MAX_SAFE_INTEGER
  let second = first

  for (let i = 0; i < length; i++) {
    if (nums[i] <= first) {
      first = nums[i]
    } else if (nums[i] <= second) {
      second = nums[i]
    } else {
      return true
    }
  }
  return false
}
