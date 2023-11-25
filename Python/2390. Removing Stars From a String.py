# noinspection PyMethodMayBeStatic
class Solution:
    def removeStars(self, s: str) -> str:
        array = []

        for word in list(s):
            if word == '*':
                array.pop()
            else:
                array.append(word)

        return ''.join(array)
