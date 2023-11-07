package main

//goland:noinspection GoUnusedFunction
func longestOnes(nums []int, k int) int {
	left := 0
	right := 0

	for ; right < len(nums); right++ {
		if nums[right] == 0 {
			k--
		}

		if k < 0 {
			if nums[left] == 0 {
				k++
			}
			left++
		}
	}

	return right - left
}
