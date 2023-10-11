class Solution:
    # noinspection PyMethodMayBeStatic
    def reverseVowels(self, s: str) -> str:
        length = len(s)

        if length <= 1:
            return s

        vowels = [
            'a', 'e', 'i', 'o', 'u',
        ]

        left = 0
        right = length - 1
        s = list(s)

        while left < length:
            if left >= right:
                break

            if s[left].lower() in vowels:
                while right > left:
                    if s[right].lower() in vowels:
                        s[left], s[right] = s[right], s[left]
                        right -= 1
                        break
                    right -= 1

            left += 1

        return ''.join(s)
