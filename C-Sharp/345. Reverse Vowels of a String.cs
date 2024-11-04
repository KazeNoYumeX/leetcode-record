using System.Diagnostics.CodeAnalysis;

namespace LeetCode.C_Sharp;

[SuppressMessage("ReSharper", "UnusedType.Global")]
[SuppressMessage("ReSharper", "UnusedMember.Global")]
public partial class Solution
{
    public string ReverseVowels(string s)
    {
        int length = s.Length;

        if (length <= 1)
        {
            return s;
        }

        HashSet<char> vowels = new HashSet<char>
        {
            'a', 'e', 'i', 'o', 'u',
            'A', 'E', 'I', 'O', 'U'
        };

        char[] slice = s.ToCharArray();

        int left = 0;
        int right = length - 1;

        while (left < length)
        {
            if (left >= right)
            {
                break;
            }

            if (vowels.Contains(slice[left]))
            {
                while (right > left)
                {
                    if (vowels.Contains(slice[right]))
                    {
                        (slice[left], slice[right]) = (slice[right], slice[left]);
                        right--;
                        break;
                    }

                    right--;
                }
            }

            left++;
        }

        return new string(slice);
    }
}
