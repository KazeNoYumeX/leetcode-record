package main

//goland:noinspection GoUnusedFunction
func canJump(nums []int) bool {
	end := len(nums) - 1

	for i := end - 1; i >= 0; i-- {
		if i+nums[i] >= end {
			end = i
		}
	}

	return end == 0
}
