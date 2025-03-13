package main

//goland:noinspection GoUnusedFunction
func isPalindrome(s string) bool {
	var filtered []rune
	length := 0
	for _, r := range s {
		if (r >= 48 && r <= 57) || (r >= 97 && r <= 122) {
			filtered = append(filtered, r)
			length++
		} else if r >= 65 && r <= 90 {
			filtered = append(filtered, r+32)
			length++
		}
	}

	if length <= 1 {
		return true
	}

	left := 0
	right := length - 1

	for left < right {
		if filtered[left] == filtered[right] {
			left++
			right--
		} else {
			return false
		}
	}

	return true
}
