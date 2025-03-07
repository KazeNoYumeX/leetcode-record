package main

//goland:noinspection GoUnusedFunction
func subarrayLCM(nums []int, k int) int {
	subArray := 0
	length := len(nums)

	for i := 0; i < length; i++ {
		current := 1
		for j := i; j < length && current <= k; j++ {
			current = lcm(current, nums[j])
			if current == k {
				subArray++
			}
		}
	}

	return subArray
}

func lcm(former int, latter int) int {
	return former * latter / gcd(former, latter)
}
