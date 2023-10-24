package main

//goland:noinspection GoUnusedFunction
func moveZeroes(nums []int) {
	length := len(nums)
	zeroSize := 0

	for i := 0; i < length; i++ {
		if nums[i] == 0 {
			zeroSize++
		} else if zeroSize > 0 {
			nums[i-zeroSize] = nums[i]
			nums[i] = 0
		}
	}
}
