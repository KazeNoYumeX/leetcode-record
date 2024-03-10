# noinspection PyMethodMayBeStatic, PyPep8Naming
class Solution:
    def reverseWords(self, s: str) -> str:
        return ' '.join(s.split()[::-1])
