package main

import "sort"

//goland:noinspection GoUnusedFunction
func removeCoveredIntervals(intervals [][]int) int {
	length := len(intervals)

	if length == 1 {
		return length
	}

	sort.Slice(intervals, func(i, j int) bool {
		if intervals[i][0] == intervals[j][0] {
			return intervals[i][1] > intervals[j][1]
		}

		return intervals[i][0] < intervals[j][0]
	})

	count := 1
	prev := intervals[0][1]

	for i := 1; i < length; i++ {
		current := intervals[i][1]
		if current > prev {
			count++
			prev = current
		}
	}

	return count
}
