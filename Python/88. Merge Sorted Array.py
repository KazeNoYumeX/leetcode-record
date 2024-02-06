from typing import List


# noinspection PyMethodMayBeStatic
class Solution:
    def merge(self, nums1: List[int], m: int, nums2: List[int], n: int) -> None:
        m -= 1
        n -= 1

        for i in range(m + n + 1, -1, -1):
            if m < 0:
                nums1[i] = nums2[n]
                n -= 1
                continue

            if n < 0:
                nums1[i] = nums1[m]
                m -= 1
                continue

            if nums2[n] > nums1[m]:
                nums1[i] = nums2[n]
                n -= 1
            else:
                nums1[i] = nums1[m]
                m -= 1
