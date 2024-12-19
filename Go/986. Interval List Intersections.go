package main

//goland:noinspection GoUnusedFunction
func intervalIntersection(firstList [][]int, secondList [][]int) [][]int {
	intervals := make([][]int, 0)
	i, j := 0, 0

	for i < len(firstList) && j < len(secondList) {
		start := max(firstList[i][0], secondList[j][0])
		end := min(firstList[i][1], secondList[j][1])

		if start <= end {
			intervals = append(intervals, []int{start, end})
		}

		if firstList[i][1] < secondList[j][1] {
			i++
		} else {
			j++
		}
	}

	return intervals
}
