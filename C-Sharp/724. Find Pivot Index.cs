using System.Diagnostics.CodeAnalysis;

namespace LeetCode.C_Sharp;

[SuppressMessage("ReSharper", "UnusedType.Global")]
[SuppressMessage("ReSharper", "UnusedMember.Global")]
public partial class Solution
{
    public int PivotIndex(int[] nums)
    {
        int left = 0;
        int right = 0;

        foreach (int num in nums)
        {
            right += num;
        }

        for (int i = 0; i < nums.Length; i++)
        {
            int current = nums[i];

            if (left == right - current)
            {
                return i;
            }

            right -= current;
            left += current;
        }

        return -1;
    }
}
