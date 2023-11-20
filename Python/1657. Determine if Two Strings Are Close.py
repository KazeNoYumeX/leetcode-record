# noinspection PyMethodMayBeStatic
class Solution:
    def closeStrings(self, word1: str, word2: str) -> bool:
        if len(word1) != len(word2):
            return False

        word1List = []
        word2List = []
        for i in set(word1):
            word1List.append(word1.count(i))
            word2List.append(word2.count(i))

        for i in word1List:
            if i not in word2List:
                return False

            word2List.remove(i)

        return True
