from typing import List


# noinspection PyMethodMayBeStatic
class Solution:
    def largestAltitude(self, gain: List[int]) -> int:
        highest = 0
        current = 0

        for point in gain:
            current += point
            highest = max(highest, current)

        return highest
