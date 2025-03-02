# The isBadVersion API is already defined for you.
# def isBadVersion(version: int) -> bool:

# noinspection PyMethodMayBeStatic, PyPep8Naming
class Solution:
    def firstBadVersion(self, n: int) -> int:
        left = 1

        while left <= n:
            mid = left + (n - left) // 2

            if isBadVersion(mid):
                n = mid - 1
            else:
                left = mid + 1

        return left


# noinspection PyMethodMayBeStatic, PyPep8Naming
def isBadVersion(version: int) -> bool:
    return version is True
