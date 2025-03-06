package main

//goland:noinspection GoUnusedFunction
func twoSum(nums []int, target int) []int {
	numsMap := make(map[int]int)

	for i, num := range nums {
		if j, ok := numsMap[target-num]; ok {
			return []int{j, i}
		}
		numsMap[num] = i
	}

	return []int{}
}
