using System.Diagnostics.CodeAnalysis;

namespace LeetCode.C_Sharp;

[SuppressMessage("ReSharper", "UnusedType.Global")]
[SuppressMessage("ReSharper", "UnusedMember.Global")]
public partial class Solution
{
    public int RemoveElement(int[] nums, int val)
    {
        int i = 0;

        for (int j = 0; j < nums.Length; j++)
        {
            if (nums[j] == val)
                continue;

            nums[i] = nums[j];
            i++;
        }

        return i;
    }
}
