package main

//goland:noinspection GoUnusedFunction
func removeDuplicatesTwo(nums []int) int {
	length := len(nums)

	if length < 3 {
		return length
	}

	left := 2

	for right := 2; right < length; right++ {
		if nums[left-2] != nums[right] {
			nums[left] = nums[right]
			left++
		}
	}

	return left
}
