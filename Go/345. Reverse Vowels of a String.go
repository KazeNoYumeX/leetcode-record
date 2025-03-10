package main

import "unicode"

//goland:noinspection GoUnusedFunction
func reverseVowels(s string) string {
	length := len(s)

	if length <= 1 {
		return s
	}

	vowels := map[rune]struct{}{
		'a': {}, 'e': {}, 'i': {}, 'o': {}, 'u': {},
	}

	slice := []rune(s)
	left := 0
	right := length - 1

	for left < length {
		if left >= right {
			break
		}

		if _, exists := vowels[unicode.ToLower(slice[left])]; exists {
			for right > left {
				if _, exists := vowels[unicode.ToLower(slice[right])]; exists {
					slice[left], slice[right] = slice[right], slice[left]
					right--
					break
				}

				right--
			}
		}

		left++
	}

	return string(slice)
}
