package main

//goland:noinspection GoUnusedFunction
func maxLength(nums []int) int {
	length := len(nums)
	subArray := 1

	for i := 0; i < length; i++ {
		product := nums[i]
		gcdNum := product
		lcmNum := product

		for j := i + 1; j < length; j++ {
			product *= nums[j]
			gcdNum = gcd(gcdNum, nums[j])
			lcmNum = lcm(lcmNum, nums[j])
			if product == gcdNum*lcmNum {
				subArray = max(subArray, j-i+1)
			}
		}
	}

	return subArray
}
