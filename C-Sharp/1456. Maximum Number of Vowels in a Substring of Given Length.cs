using System.Diagnostics.CodeAnalysis;

namespace LeetCode.C_Sharp;

[SuppressMessage("ReSharper", "UnusedType.Global")]
[SuppressMessage("ReSharper", "UnusedMember.Global")]
public partial class Solution
{
    public static int MaxVowels(string s, int k)
    {
        int maxVowel = 0;

        for (int i = 0; i < k; i++)
        {
            if (VowelCheck(s[i]))
            {
                maxVowel++;
            }
        }

        int current = maxVowel;
        for (int i = k; i < s.Length; i++)
        {
            if (VowelCheck(s[i - k]))
            {
                current--;
            }

            if (VowelCheck(s[i]))
            {
                current++;
            }

            if (current > maxVowel)
            {
                maxVowel = current;
            }
        }

        return maxVowel;
    }

    private static bool VowelCheck(char c)
    {
        return c is 'a' or 'e' or 'i' or 'o' or 'u';
    }
}
