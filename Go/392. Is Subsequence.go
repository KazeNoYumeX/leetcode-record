package main

//goland:noinspection GoUnusedFunction
func isSubsequence(s string, t string) bool {
	lengthS := len(s)
	lengthT := len(t)

	if lengthS > lengthT {
		return false
	}

	if lengthS == 0 {
		return true
	}

	subsequence := 0

	for i := 0; i < lengthT; i++ {
		if s[subsequence] == t[i] {
			subsequence++
		}

		if lengthS == subsequence {
			break
		}
	}

	return lengthS == subsequence
}
