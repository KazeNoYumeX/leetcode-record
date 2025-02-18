// noinspection JSUnusedGlobalSymbols
const findMedianSortedArrays = (nums1: number[], nums2: number[]): number => {
  const length1 = nums1.length
  const length2 = nums2.length

  if (length1 > length2) {
    return findMedianSortedArrays(nums2, nums1)
  }

  let left = 0
  let right = length1
  while (left <= right) {
    const x = left + Math.floor((right - left) / 2)
    const y = Math.floor((length1 + length2 + 1) / 2) - x

    const xLeft = x === 0 ? Number.MIN_SAFE_INTEGER : nums1[x - 1]
    const xRight = x === length1 ? Number.MAX_SAFE_INTEGER : nums1[x]

    const yLeft = y === 0 ? Number.MIN_SAFE_INTEGER : nums2[y - 1]
    const yRight = y === length2 ? Number.MAX_SAFE_INTEGER : nums2[y]

    if (xLeft <= yRight && yLeft <= xRight) {
      if ((length1 + length2) % 2 === 0) {
        return (Math.max(xLeft, yLeft) + Math.min(xRight, yRight)) / 2
      }

      return Math.max(xLeft, yLeft)
    } else if (xLeft > yRight) {
      right = x - 1
    } else {
      left = x + 1
    }
  }

  return -1
}
