from typing import List


# noinspection PyMethodMayBeStatic, PyPep8Naming
class Solution:
    def removeDuplicates(self, nums: List[int]) -> int:
        length = len(nums)

        if length < 3:
            return length

        left = 2

        for right in range(2, length):
            if nums[left - 2] != nums[right]:
                nums[left] = nums[right]
                left += 1

        return left
