# noinspection PyMethodMayBeStatic
class Solution:
    def maxVowels(self, s: str, k: int) -> int:
        max_vowel_count = 0
        vowels = {'a', 'e', 'i', 'o', 'u'}

        for i in range(k):
            if s[i] in vowels:
                max_vowel_count += 1

        second_vowel_count = max_vowel_count
        for i in range(k, len(s)):
            if s[i - k] in vowels:
                second_vowel_count -= 1

            if s[i] in vowels:
                second_vowel_count += 1

            if second_vowel_count > max_vowel_count:
                max_vowel_count = second_vowel_count

        return max_vowel_count
