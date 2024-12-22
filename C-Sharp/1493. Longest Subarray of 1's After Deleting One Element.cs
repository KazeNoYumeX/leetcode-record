using System.Diagnostics.CodeAnalysis;

namespace LeetCode.C_Sharp;

[SuppressMessage("ReSharper", "UnusedType.Global")]
[SuppressMessage("ReSharper", "UnusedMember.Global")]
public partial class Solution
{
    public static int LongestSubarray(int[] nums)
    {
        int left = 0;
        int right = 0;

        for (int remove = 1; right < nums.Length; right++)
        {
            if (nums[right] == 0)
            {
                remove--;
            }

            if (remove < 0 && nums[left++] == 0)
            {
                remove++;
            }
        }

        return right - left - 1;
    }
}
