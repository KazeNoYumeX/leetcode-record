using System.Diagnostics.CodeAnalysis;

namespace LeetCode.C_Sharp;

[SuppressMessage("ReSharper", "UnusedType.Global")]
[SuppressMessage("ReSharper", "UnusedMember.Global")]
public partial class Solution
{
    public int RemoveDuplicatesTwo(int[] nums)
    {
        int length = nums.Length;

        if (length < 3) {
            return nums.Length;
        }

        int left = 2;

        for (int right = 2; right < length; right++)
        {
            if (nums[left - 2] == nums[right])
                continue;

            nums[left] = nums[right];
            left++;
        }

        return left;
    }
}
