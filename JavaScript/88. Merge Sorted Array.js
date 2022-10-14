/**
 * @param {number[]} nums1
 * @param {number} m
 * @param {number[]} nums2
 * @param {number} n
 * @return {void} Do not return anything, modify nums1 in-place instead.
 */
const merge = (nums1, m, nums2, n) => {
    let idx = --m + --n + 1

    while (n >= 0) {
        nums1[idx--] = (m >= 0 && nums1[m] > nums2[n]) ? nums1[m--] : nums2[n--]
    }
};