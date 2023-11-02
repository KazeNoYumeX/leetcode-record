import collections


# noinspection PyMethodMayBeStatic
class Solution:
    def maxOperations(self, nums, k):
        nums = collections.Counter(nums)
        operations = 0

        for num, count in nums.items():
            if k - num in nums:
                operations += min(count, nums[k - num])

        return operations // 2
