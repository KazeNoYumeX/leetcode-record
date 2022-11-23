from collections import deque


class Solution:
    def numSquares(self, n: int) -> int:
        sq = [x * x for x in range(1, n) if x * x <= n]
        queue = deque([(n, 1)])
        seen = set()
        seen.add(n)
        while queue:
            node, d = queue.popleft()
            if node in sq:
                return d
            for s in sq:
                if node <= s:
                    break

                left = node - s
                if left not in seen:
                    seen.add(left)
                    queue.append((left, d + 1))
        return n
