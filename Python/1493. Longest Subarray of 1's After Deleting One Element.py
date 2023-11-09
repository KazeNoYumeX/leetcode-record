from typing import List


# noinspection PyMethodMayBeStatic
class Solution:
    def longestSubarray(self, nums: List[int]) -> int:
        left = 0
        right = 0
        remove = 1

        for right in range(len(nums)):
            if nums[right] == 0:
                remove -= 1

            if remove < 0:
                if nums[left] == 0:
                    remove += 1
                left += 1

        return right - left
