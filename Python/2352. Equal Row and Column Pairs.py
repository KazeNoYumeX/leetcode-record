from typing import List


# noinspection PyMethodMayBeStatic
class Solution:
    def equalPairs(self, grid: List[List[int]]) -> int:
        length = len(grid)
        rows = {}

        for i in range(length):
            cols = tuple(grid[i])
            rows[cols] = rows.get(cols, 0) + 1

        pairs = 0

        for i in range(length):
            cols = []
            for j in range(length):
                cols.append(grid[j][i])

            col = tuple(cols)
            if col in rows:
                pairs += rows[col]

        return pairs
