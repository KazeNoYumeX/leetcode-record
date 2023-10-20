package main

import "math"

//goland:noinspection GoUnusedFunction
func increasingTriplet(nums []int) bool {
	length := len(nums)

	if length < 3 {
		return false
	}

	first, second := math.MaxInt32, math.MaxInt32

	for _, num := range nums {
		if num <= first {
			first = num
		} else if num <= second {
			second = num
		} else {
			return true
		}
	}
	return false
}
