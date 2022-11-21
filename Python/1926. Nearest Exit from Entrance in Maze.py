from collections import deque
from typing import List


class Solution:
    def nearestExit(self, maze: List[List[str]], entrance: List[int]) -> int:
        width, length = len(maze), len(maze[0])
        quits = deque()
        quits.append([entrance[0], entrance[1], -1])

        while quits:
            x, y, steps = quits.popleft()

            if not (0 <= x < width and 0 <= y < length):
                if steps > 0:
                    return steps
                continue

            if maze[x][y] == '+':
                continue

            maze[x][y] = '+'
            for _x, _y in ((0, 1), (0, -1), (1, 0), (-1, 0)):
                quits.append([x + _x, y + _y, steps + 1])

        return -1
