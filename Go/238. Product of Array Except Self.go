package main

//goland:noinspection GoUnusedFunction
func productExceptSelf(nums []int) []int {
	numCount := len(nums)
	result := make([]int, numCount)

	num := 1
	for i := numCount - 1; i >= 0; i-- {
		result[i] = num
		num *= nums[i]
	}

	num = 1
	for i := 0; i < numCount; i++ {
		result[i] *= num
		num *= nums[i]
	}

	return result

}
