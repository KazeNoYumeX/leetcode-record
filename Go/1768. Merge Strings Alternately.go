package main

//goland:noinspection GoUnusedFunction

func mergeAlternately(word1 string, word2 string) string {
	var result []rune
	var i, j int

	for i < len(word1) || j < len(word2) {
		if i < len(word1) {
			result = append(result, rune(word1[i]))
			i++
		}

		if j < len(word2) {
			result = append(result, rune(word2[j]))
			j++
		}
	}

	return string(result)
}
