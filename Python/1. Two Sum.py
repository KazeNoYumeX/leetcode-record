from typing import List


# noinspection PyMethodMayBeStatic, PyPep8Naming
class Solution:
    def twoSum(self, nums: List[int], target: int) -> List[int]:
        map = {}

        for i, num in enumerate(nums):
            if target - num in map:
                return [map[target - num], i]
            map[num] = i

        return [-1, -1]
