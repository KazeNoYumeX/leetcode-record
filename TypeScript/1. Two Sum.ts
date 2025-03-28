// noinspection JSUnusedGlobalSymbols
const twoSum = (nums: number[], target: number): number[] | null => {
  const map: { [key: number]: number } = {}

  for (let i = 0; i < nums.length; i++) {
    const current = nums[i]
    const another = target - current

    if (map[another] >= 0) {
      return [map[another], i]
    }

    map[current] = i
  }
  return null
}
