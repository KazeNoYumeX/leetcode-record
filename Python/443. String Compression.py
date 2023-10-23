from typing import List


class Solution:
    # noinspection PyMethodMayBeStatic
    def compress(self, chars: List[str]) -> int:
        length = len(chars)
        index = 0

        i = 0
        while i < length:
            current = chars[i]
            count = 0

            while i < length and chars[i] == current:
                count += 1
                i += 1

            chars[index] = current
            index += 1

            if count > 1:
                for char in str(count):
                    chars[index] = char
                    index += 1

        return index
