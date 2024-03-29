// noinspection JSUnusedGlobalSymbols

/**
 * @param {number[]} nums1
 * @param {number} m
 * @param {number[]} nums2
 * @param {number} n
 * @return {void} Do not return anything, modify nums1 in-place instead.
 */
const merge = (nums1, m, nums2, n) => {
  m--
  n--

  for (let i = m + n + 1; i >= 0; i--) {
    if (m < 0) {
      nums1[i] = nums2[n]
      n--
      continue
    }

    if (n < 0) {
      nums1[i] = nums1[m]
      m--
      continue
    }

    if (nums2[n] > nums1[m]) {
      nums1[i] = nums2[n]
      n--
    } else {
      nums1[i] = nums1[m]
      m--
    }
  }
}
