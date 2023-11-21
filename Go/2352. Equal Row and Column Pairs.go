package main

//goland:noinspection GoUnusedFunction
func equalPairs(grid [][]int) int {
	length := len(grid)
	rows := make(map[[200]int]int)
	cols := [200]int{}

	for i := 0; i < length; i++ {
		copy(cols[:], grid[i])
		rows[cols]++
	}

	pairs := 0

	for i := 0; i < length; i++ {
		cols := [200]int{}
		for j := 0; j < length; j++ {
			cols[j] = grid[j][i]
		}

		if v, exists := rows[cols]; exists {
			pairs += v
		}
	}

	return pairs
}
