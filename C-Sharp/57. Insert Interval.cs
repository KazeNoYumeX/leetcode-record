using System.Diagnostics.CodeAnalysis;

namespace LeetCode.C_Sharp;

[SuppressMessage("ReSharper", "UnusedType.Global")]
[SuppressMessage("ReSharper", "UnusedMember.Global")]
public partial class Solution
{
    public int[][] Insert(int[][] intervals, int[] newInterval)
    {
        List<int[]> result = new List<int[]>();

        for (int i = 0; i < intervals.Length; i++)
        {
            int[] current = intervals[i];

            if (newInterval.Length == 0 || current[1] < newInterval[0])
            {
                result.Add(current);
            }
            else if (current[0] > newInterval[1])
            {
                result.Add(newInterval);
                result.Add(current);
                newInterval = [];
            }
            else
            {
                newInterval = new int[] { Math.Min(newInterval[0], current[0]), Math.Max(newInterval[1], current[1]) };
            }
        }

        if (newInterval.Length > 0)
        {
            result.Add(newInterval);
        }

        return result.ToArray();
    }
}
