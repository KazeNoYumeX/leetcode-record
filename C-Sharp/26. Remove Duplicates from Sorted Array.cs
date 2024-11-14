using System.Diagnostics.CodeAnalysis;

namespace LeetCode.C_Sharp;

[SuppressMessage("ReSharper", "UnusedType.Global")]
[SuppressMessage("ReSharper", "UnusedMember.Global")]
public partial class Solution
{
    public int RemoveDuplicates(int[] nums) {
        int left = 0;

        for (int right = 1; right < nums.Length; right++)
        {
            if (nums[left] == nums[right])
                continue;

            left++;
            nums[left] = nums[right];
        }

        return left + 1;
    }
}
