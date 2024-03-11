package main

//goland:noinspection GoUnusedFunction
func majorityElement(nums []int) int {
	count := 1
	majority := nums[0]

	for i := 1; i < len(nums); i++ {
		if count == 0 {
			majority = nums[i]
			count++
		} else if majority == nums[i] {
			count++
		} else {
			count--
		}
	}

	return majority
}
