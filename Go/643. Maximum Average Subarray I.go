package main

import "math"

//goland:noinspection GoUnusedFunction
func findMaxAverage(nums []int, k int) float64 {
	left, right := 0, 0
	average := math.Inf(-1)
	var sum float64

	for right < len(nums) {
		window := right - left + 1

		sum += float64(nums[right])

		if window == k {
			average = max(sum/float64(k), average)

			sum -= float64(nums[left])
			left++
		}

		right++
	}

	return average
}
