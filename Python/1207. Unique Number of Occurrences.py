from collections import Counter
from typing import List


# noinspection PyMethodMayBeStatic
class Solution:
    def uniqueOccurrences(self, arr: List[int]) -> bool:
        arr = Counter(arr)
        return len(arr) == len(set(arr.values()))
