package main

//goland:noinspection GoUnusedFunction
func longestSubarray(nums []int) int {
	left := 0
	right := 0

	for remove := 1; right < len(nums); right++ {
		if nums[right] == 0 {
			remove--
		}

		if remove < 0 {
			if nums[left] == 0 {
				remove++
			}
			left++
		}
	}

	return right - left - 1
}
