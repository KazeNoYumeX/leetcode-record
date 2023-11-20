package main

import (
	"reflect"
	"sort"
)

//goland:noinspection GoUnusedFunction
func closeStrings(word1 string, word2 string) bool {
	if len(word1) != len(word2) {
		return false
	}

	word1Map := make(map[rune]int)
	word2Map := make(map[rune]int)

	for _, char := range word1 {
		word1Map[char]++
	}

	for _, char := range word2 {
		word2Map[char]++
	}

	if len(word1Map) != len(word2Map) {
		return false
	}

	word1Counts := make([]int, 0, len(word1Map))
	word2Counts := make([]int, 0, len(word2Map))

	for charCount := range word1Map {
		word1Counts = append(word1Counts, word1Map[charCount])
		if _, exists := word2Map[charCount]; !exists {
			return false
		}
		word2Counts = append(word2Counts, word2Map[charCount])
		delete(word2Map, charCount)
	}

	sort.Ints(word1Counts)
	sort.Ints(word2Counts)

	return reflect.DeepEqual(word1Counts, word2Counts)
}
