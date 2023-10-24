from typing import List


# noinspection PyMethodMayBeStatic
class Solution:
    def moveZeroes(self, nums: List[int]) -> None:
        length = len(nums)
        zero_size = 0

        for i in range(length):
            if nums[i] == 0:
                zero_size += 1
            elif zero_size > 0:
                nums[i - zero_size] = nums[i]
                nums[i] = 0
