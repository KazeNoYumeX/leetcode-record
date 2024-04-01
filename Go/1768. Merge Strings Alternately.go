package main

//goland:noinspection GoUnusedFunction
func mergeAlternately(word1 string, word2 string) string {
	var result []byte

	length := max(len(word1), len(word2))

	for i := 0; i < length; i++ {
		if i < len(word1) {
			result = append(result, word1[i])
		}

		if i < len(word2) {
			result = append(result, word2[i])
		}
	}
	return string(result)
}
