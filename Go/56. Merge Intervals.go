package main

import "sort"

//goland:noinspection GoUnusedFunction
func mergeIntervals(intervals [][]int) [][]int {
	length := len(intervals)

	if length <= 1 {
		return intervals
	}

	sort.Slice(intervals, func(i, j int) bool {
		return intervals[i][0] < intervals[j][0]
	})

	interval := intervals[0]
	mergedIntervals := make([][]int, 0)

	for i := 1; i < length; i++ {
		current := intervals[i]
		if interval[1] >= current[0] {
			interval[1] = max(interval[1], current[1])
		} else {
			mergedIntervals = append(mergedIntervals, interval)
			interval = current
		}
	}

	mergedIntervals = append(mergedIntervals, interval)

	return mergedIntervals
}
