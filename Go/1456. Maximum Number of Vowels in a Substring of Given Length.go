package main

//goland:noinspection GoUnusedFunction
func maxVowels(s string, k int) int {
	maxVowel := 0
	vowels := map[byte]bool{
		'a': true, 'e': true, 'i': true, 'o': true, 'u': true,
	}

	for i := 0; i < k; i++ {
		if vowels[s[i]] {
			maxVowel++
		}
	}

	current := maxVowel
	for i := k; i < len(s); i++ {

		if vowels[s[i-k]] {
			current--
		}

		if vowels[s[i]] {
			current++
		}

		if current > maxVowel {
			maxVowel = current
		}
	}

	return maxVowel
}
