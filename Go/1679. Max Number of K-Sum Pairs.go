package main

//goland:noinspection GoUnusedFunction
func maxOperations(nums []int, k int) int {
	numsCount := make(map[int]int)

	for _, num := range nums {
		numsCount[num]++
	}

	operations := 0

	for num, count := range numsCount {
		if indexCount, ok := numsCount[k-num]; ok {
			operations += min(count, indexCount)
		}
	}

	return operations / 2
}
