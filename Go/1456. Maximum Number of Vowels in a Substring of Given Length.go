package main

//goland:noinspection GoUnusedFunction
func maxVowels(s string, k int) int {
	maxVowelCount := 0
	vowels := map[byte]bool{
		'a': true, 'e': true, 'i': true, 'o': true, 'u': true,
	}

	for i := 0; i < k; i++ {
		if vowels[s[i]] {
			maxVowelCount++
		}
	}

	secondVowels := maxVowelCount
	for i := k; i < len(s); i++ {

		if vowels[s[i-k]] {
			secondVowels--
		}

		if vowels[s[i]] {
			secondVowels++
		}

		if secondVowels > maxVowelCount {
			maxVowelCount = secondVowels
		}
	}

	return maxVowelCount
}
