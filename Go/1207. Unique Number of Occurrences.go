package main

//goland:noinspection GoUnusedFunction
func uniqueOccurrences(arr []int) bool {
	occurrences := make(map[int]int)

	for _, num := range arr {
		occurrences[num]++
	}

	unique := make(map[int]struct{})

	for _, count := range occurrences {
		unique[count] = struct{}{}
	}

	return len(unique) == len(occurrences)
}
