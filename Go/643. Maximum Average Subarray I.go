package main

import "math"

//goland:noinspection GoUnusedFunction
func findMaxAverage(nums []int, k int) float64 {
	sum := 0
	maxSum := math.MinInt32

	for i := 0; i < len(nums); i++ {
		if i > k-1 {
			sum -= nums[i-k]
		}

		sum += nums[i]

		if i >= k-1 {
			if sum > maxSum {
				maxSum = sum
			}
		}
	}

	return float64(maxSum) / float64(k)
}
