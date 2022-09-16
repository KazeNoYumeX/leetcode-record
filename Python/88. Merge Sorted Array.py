from typing import List


class Solution:
    def merge(self, nums1: List[int], m: int, nums2: List[int], n: int) -> None:
        m -= 1
        idx = m + n
        n -= 1

        while n >= 0:
            if m >= 0 and nums1[m] > nums2[n]:
                nums1[idx] = nums1[m]
                m -= 1
            else:
                nums1[idx] = nums2[n]
                n -= 1
            idx -= 1
