using System.Diagnostics.CodeAnalysis;

namespace LeetCode.C_Sharp;

[SuppressMessage("ReSharper", "UnusedType.Global")]
[SuppressMessage("ReSharper", "UnusedMember.Global")]
public partial class Solution
{
    public int MaxArea(int[] height)
    {
        int start = 0;
        int end = height.Length - 1;
        int max = 0;

        while (end > start)
        {
            int left = height[start];
            int right = height[end];
            int min = Math.Min(left, right);
            max = Math.Max(max, min * end - start);

            if (left < right)
            {
                start++;
            }
            else
            {
                end--;
            }
        }
        return max;
    }
}
