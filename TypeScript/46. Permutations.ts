// noinspection JSUnusedGlobalSymbols
const permute = (nums: number[]): number[][] => {
  const permutations: number[][] = []

  const used = Array(nums.length).fill(false)

  backtrack(permutations, [], nums, used)

  return permutations
}

const backtrack = (permutations: number[][], list: number[], nums: number[], used: boolean[]): void => {
  const length = nums.length

  if (list.length === length) {
    permutations.push([...list])

    return
  }

  for (let i = 0; i < length; i++) {
    if (used[i]) {
      continue
    }

    used[i] = true

    list.push(nums[i])
    backtrack(permutations, list, nums, used)
    list.pop()

    used[i] = false
  }
}
