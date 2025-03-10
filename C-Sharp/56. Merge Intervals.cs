using System.Diagnostics.CodeAnalysis;

namespace LeetCode.C_Sharp;

[SuppressMessage("ReSharper", "UnusedType.Global")]
[SuppressMessage("ReSharper", "UnusedMember.Global")]
public partial class Solution
{
    public static int[][] Merge(int[][] intervals)
    {
        int length = intervals.Length;

        if (length <= 1)
        {
            return intervals;
        }

        Array.Sort(intervals, (a, b) => a[0] - b[0]);

        int[] interval = intervals[0];
        List<int[]> mergedIntervals = [];

        for (int i = 1; i < length; i++)
        {
            if (interval[1] >= intervals[i][0])
            {
                interval[1] = Math.Max(interval[1], intervals[i][1]);
            }
            else
            {
                mergedIntervals.Add(interval);
                interval = intervals[i];
            }
        }

        mergedIntervals.Add(interval);

        return mergedIntervals.ToArray();
    }
}
