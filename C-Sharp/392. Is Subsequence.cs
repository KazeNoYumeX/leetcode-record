using System.Diagnostics.CodeAnalysis;

namespace LeetCode.C_Sharp;

[SuppressMessage("ReSharper", "UnusedType.Global")]
[SuppressMessage("ReSharper", "UnusedMember.Global")]
public partial class Solution
{
    public bool IsSubsequence(string s, string t)
    {
        int lengthS = s.Length;
        int lengthT = t.Length;

        if (lengthS > lengthT)
        {
            return false;
        }

        if (lengthS == 0)
        {
            return true;
        }

        int subsequence = 0;

        for (int i = 0; i < lengthT; i++)
        {
            if (s[subsequence] == t[i])
            {
                subsequence++;
            }

            if (subsequence == lengthS)
            {
                break;
            }
        }

        return lengthS == subsequence;
    }
}
