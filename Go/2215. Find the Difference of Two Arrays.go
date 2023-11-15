package main

//goland:noinspection GoUnusedFunction
func findDifference(nums1 []int, nums2 []int) [][]int {
	set1 := make(map[int]struct{})
	set2 := make(map[int]struct{})

	for _, num := range nums1 {
		set1[num] = struct{}{}
	}

	for _, num := range nums2 {
		set2[num] = struct{}{}
	}

	result := [][]int{{}, {}}

	for num := range set1 {
		if _, exists := set2[num]; !exists {
			result[0] = append(result[0], num)
		}
	}

	for num := range set2 {
		if _, exists := set1[num]; !exists {
			result[1] = append(result[1], num)
		}
	}

	return result
}
