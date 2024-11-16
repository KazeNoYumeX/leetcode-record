# noinspection PyMethodMayBeStatic, PyPep8Naming
class Solution:
    def removeCoveredIntervals(self, intervals: List[List[int]]) -> int:
        length = len(intervals)
        if length == 1:
            return length

        intervals.sort(key=lambda x: (x[0], -x[1]))

        count = 1
        prev = intervals[0][1]

        for i in range(1, length):
            current = intervals[i][1]
            if current > prev:
                count += 1
                prev = current

        return count
