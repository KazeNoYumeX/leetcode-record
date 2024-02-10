from typing import List


# noinspection PyMethodMayBeStatic
class Solution:
    def productExceptSelf(self, nums: List[int]) -> List[int]:
        count = len(nums)
        result = [1] * count

        num = 1
        for i in range(count - 1, -1, -1):
            result[i] = num
            num *= nums[i]

        num = 1
        for i in range(0, count):
            result[i] *= num
            num *= nums[i]

        return result
