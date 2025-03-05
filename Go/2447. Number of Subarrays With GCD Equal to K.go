package main

//goland:noinspection GoUnusedFunction
func subarrayGCD(nums []int, k int) int {
	subArray := 0
	length := len(nums)

	for i := 0; i < length; i++ {
		current := nums[i]
		for j := i; j < length && nums[j]%k == 0; j++ {
			current = gcd(current, nums[j])
			if current == k {
				subArray++
			}
		}
	}

	return subArray
}
