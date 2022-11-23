from typing import List


class Solution:
    def maxProfit(self, prices: List[int]) -> int:
        maxCurr = maxSoFar = 0

        for x in range(len(prices)):
            if x == 0:
                continue
            else:
                maxCurr = max(0, maxCurr + prices[x] - prices[x - 1])
                maxSoFar = max(maxCurr, maxSoFar)
        return maxSoFar
