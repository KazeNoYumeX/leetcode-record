class Solution:
    # noinspection PyMethodMayBeStatic
    def reverseWords(self, s: str) -> str:
        return ' '.join(s.split()[::-1])
