from typing import List


class Solution:
    # noinspection PyMethodMayBeStatic
    def canPlaceFlowers(self, flowerbed: List[int], n: int) -> bool:
        if n == 0:
            return True

        length = len(flowerbed)

        i = 0
        while i < length:
            if flowerbed[i] == 1:
                i += 2
            elif i + 1 >= length or flowerbed[i + 1] == 0:
                n -= 1
                i += 2
            else:
                i += 3

            if n == 0:
                return True

        return False
