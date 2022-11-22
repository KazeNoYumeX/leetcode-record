class Solution:
    def longestPalindrome(self, s: str) -> int:
        if s is None or s == "":
            return 0

        count = 0
        check = set()
        for i in range(len(s)):
            if s[i] in check:
                check.remove(s[i])
                count += 1
            else:
                check.add(s[i])

        if len(check) != 0:
            return count * 2 + 1
        return count * 2
