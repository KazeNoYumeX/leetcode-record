# The isBadVersion API is already defined for you.
# def isBadVersion(version: int) -> bool:

class Solution:
    def firstBadVersion(self, n: int) -> int:
        i, j = 1, n

        while i < j:
            k = int((i + j) / 2)
            if isBadVersion(k):
                j = k
            else:
                i = k + 1
        return i
