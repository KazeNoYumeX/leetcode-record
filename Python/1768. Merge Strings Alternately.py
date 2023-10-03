# noinspection PyMethodMayBeStatic
class Solution:
    def mergeAlternately(self, word1: str, word2: str) -> str:
        result = ''
        length = min(len(word1), len(word2))

        for i in range(length):
            result += word1[i] + word2[i]

        i += 1
        return result + word1[i:] + word2[i:]

