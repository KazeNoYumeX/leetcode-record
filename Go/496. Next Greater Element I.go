package main

//goland:noinspection GoUnusedFunction
func nextGreaterElement(nums1 []int, nums2 []int) []int {
	elementMap := make(map[int]int)
	stack := make([]int, 0)
	for i := len(nums2) - 1; i >= 0; i-- {
		for len(stack) > 0 && nums2[i] >= stack[len(stack)-1] {
			stack = stack[:len(stack)-1]
		}

		length := len(stack)
		if length == 0 {
			elementMap[nums2[i]] = -1
		} else {
			elementMap[nums2[i]] = stack[length-1]
		}

		stack = append(stack, nums2[i])
	}

	length := len(nums1)
	elements := make([]int, length)
	for i := 0; i < length; i++ {
		elements[i] = elementMap[nums1[i]]
	}
	return elements
}
