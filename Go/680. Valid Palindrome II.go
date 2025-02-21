package main

//goland:noinspection GoUnusedFunction
func validPalindrome(s string) bool {
	length := len(s)

	if length <= 1 {
		return true
	}

	left := 0
	right := length - 1

	for left < right {
		if s[left] != s[right] {
			return palindrome(s, left+1, right) || palindrome(s, left, right-1)
		}

		left++
		right--
	}

	return true
}

func palindrome(s string, left int, right int) bool {
	for left < right {
		if s[left] != s[right] {
			return false
		}

		left++
		right--
	}

	return true
}
