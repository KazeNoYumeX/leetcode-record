from typing import List


# noinspection PyMethodMayBeStatic, PyPep8Naming
class Solution:
    def maxProfit(self, prices: List[int]) -> int:
        minimum = float('inf')
        maximum = 0

        for price in prices:
            if price < minimum:
                minimum = price

            profit = price - minimum
            if profit > maximum:
                maximum = profit

        return maximum
