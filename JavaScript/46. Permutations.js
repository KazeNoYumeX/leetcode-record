// noinspection JSUnusedGlobalSymbols

/**
 * @param {number[]} nums
 * @return {number[][]}
 */
const permute = (nums) => {
  const permutations = []

  const used = Array(nums.length).fill(false)

  backtrack(permutations, [], nums, used)

  return permutations
}

const backtrack = (permutations, list, nums, used) => {
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
