# noinspection PyMethodMayBeStatic
class Solution:
    def isSubsequence(self, s: str, t: str) -> bool:
        length_s = len(s)
        length_t = len(t)

        if length_s > length_t:
            return False

        if length_s == 0:
            return True

        subsequence = 0

        for i in range(length_t):
            if s[subsequence] == t[i]:
                subsequence += 1

                if subsequence == length_s:
                    break

        return length_s == subsequence
