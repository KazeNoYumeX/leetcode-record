from typing import List


class Solution:
    def pivotIndex(self, nums: List[int]) -> int:
        left, right = 0, sum(nums)

        for idx, val in enumerate(nums):
            right -= val

            if left == right:
                return idx

            left += val
        return -1
