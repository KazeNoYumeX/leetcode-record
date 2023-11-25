package main

//goland:noinspection GoUnusedFunction
func removeStars(s string) string {
	array := make([]rune, 0)

	for _, word := range s {
		if word != '*' {
			array = append(array, word)
		} else {
			array = array[:len(array)-1]
		}
	}

	return string(array)
}
