package main

import "strconv"

//goland:noinspection GoUnusedFunction
func compress(chars []byte) int {
	length := len(chars)
	index := 0

	for i := 0; i < length; {
		current := chars[i]
		count := 0

		for i < length && chars[i] == current {
			count++
			i++
		}

		chars[index] = current
		index++

		if count > 1 {
			for _, char := range []byte(strconv.Itoa(count)) {
				chars[index] = char
				index++
			}
		}
	}
	return index
}
