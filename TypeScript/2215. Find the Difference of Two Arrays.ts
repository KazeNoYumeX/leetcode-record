// noinspection JSUnusedGlobalSymbols
const findDifference = (nums1: number[], nums2: number[]): number[][] => {
  const num1 = new Set(nums1)
  const num2 = new Set(nums2)

  const result: number[][] = [[], []]

  for (const num of num1) {
    if (!num2.has(num)) {
      result[0].push(num)
    }
  }

  for (const num of num2) {
    if (!num1.has(num)) {
      result[1].push(num)
    }
  }

  return result
}
