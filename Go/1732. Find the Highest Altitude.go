package main

//goland:noinspection GoUnusedFunction
func largestAltitude(gain []int) int {
	highest := 0
	current := 0

	for _, point := range gain {
		current += point
		if current > highest {
			highest = current
		}
	}

	return highest
}
