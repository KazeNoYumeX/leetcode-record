using System.Diagnostics.CodeAnalysis;

namespace LeetCode.C_Sharp;

[SuppressMessage("ReSharper", "UnusedType.Global")]
[SuppressMessage("ReSharper", "UnusedMember.Global")]
public partial class Solution
{
    public static IList<IList<int>> FindDifference(int[] nums1, int[] nums2)
    {
        HashSet<int> set1 = new(nums1);
        HashSet<int> set2 = new(nums2);

        foreach (int num in nums1)
        {
            if (!set2.Contains(num))
            {
                continue;
            }

            set1.Remove(num);
            set2.Remove(num);
        }

        return new List<IList<int>> { set1.ToList(), set2.ToList() };
    }
}
