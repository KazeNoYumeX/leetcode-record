package main

import (
	"strings"
)

//goland:noinspection GoUnusedFunction
func reverseWords(s string) string {
	words := strings.Fields(s)
	length := len(words)

	reverseWords := make([]string, length)
	for i, j := 0, length-1; i < length; i, j = i+1, j-1 {
		reverseWords[i] = words[j]
	}

	return strings.Join(reverseWords, " ")
}
