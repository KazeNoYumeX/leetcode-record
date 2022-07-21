/**
 * @param {number[]} nums1
 * @param {number[]} nums2
 * @return {number}
 */
const findMedianSortedArrays = (nums1, nums2) => {
    const array = (nums1.concat(nums2)).sort((a,b) => a - b)
    const len = array.length
    return len % 2 === 0 ? (array[len / 2] + array[(len - 2) / 2]) / 2 : (array[(len - 1) / 2]);
};