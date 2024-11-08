using System.Diagnostics.CodeAnalysis;

namespace LeetCode.C_Sharp;

[SuppressMessage("ReSharper", "UnusedType.Global")]
[SuppressMessage("ReSharper", "UnusedMember.Global")]
public partial class Solution
{
    public string ReverseWords(string s)
    {
        string[] words = s.Split(' ');

        Array.Reverse(words);

        return string.Join(" ", words.Where(x => x != ""));
    }
}
