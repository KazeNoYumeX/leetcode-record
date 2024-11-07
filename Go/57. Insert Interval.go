package main

//goland:noinspection GoUnusedFunction
func insert(intervals [][]int, newInterval []int) [][]int {
	result := make([][]int, 0)

	for i := 0; i < len(intervals); i++ {
		current := intervals[i]

		if newInterval == nil || current[1] < newInterval[0] {
			result = append(result, current)
		} else if current[0] > newInterval[1] {
			result = append(result, newInterval)
			result = append(result, current)
			newInterval = nil
		} else {
			newInterval = []int{min(newInterval[0], current[0]), max(newInterval[1], current[1])}
		}
	}

	if newInterval != nil {
		result = append(result, newInterval)
	}

	return result
}
