import math
from typing import List


# noinspection PyMethodMayBeStatic, PyPep8Naming
class Solution:
    def findMaxAverage(self, nums: List[int], k: int) -> float:
        left, right = 0, 0
        average = -math.inf
        summation = 0

        while right < len(nums):
            window = right - left + 1

            summation += nums[right]

            if window == k:
                average = max(summation / k, average)

                summation -= nums[left]
                left += 1

            right += 1

        return average
