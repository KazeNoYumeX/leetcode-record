package main

//goland:noinspection GoUnusedFunction
func pivotIndex(nums []int) int {
	left := 0
	right := 0

	for _, num := range nums {
		right += num
	}

	for i, num := range nums {
		if left == right-num {
			return i
		}
		left += num
		right -= num
	}

	return -1
}
