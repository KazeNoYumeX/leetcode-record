using System.Diagnostics.CodeAnalysis;

namespace LeetCode.C_Sharp;

[SuppressMessage("ReSharper", "UnusedType.Global")]
[SuppressMessage("ReSharper", "UnusedMember.Global")]
public partial class Solution
{
    public void Merge(int[] nums1, int m, int[] nums2, int n)
    {
        m--;
        n--;

        for (var i = m + n + 1; i >= 0; i--)
        {
            if (m < 0)
            {
                nums1[i] = nums2[n];
                n--;
                continue;
            }

            if (n < 0)
            {
                nums1[i] = nums1[m];
                m--;
                continue;
            }

            if (nums2[n] > nums1[m])
            {
                nums1[i] = nums2[n];
                n--;
            }
            else
            {
                nums1[i] = nums1[m];
                m--;
            }
        }
    }
}
