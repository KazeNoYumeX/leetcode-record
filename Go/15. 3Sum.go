package main

import "sort"

//goland:noinspection GoUnusedFunction
func threeSum(nums []int) [][]int {
	length := len(nums)
	if length < 3 {
		return [][]int{}
	}

	sort.Ints(nums)
	array := make([][]int, 0)

	for i := 0; i < length-2; i++ {
		current := nums[i]
		if current > 0 {
			break
		}

		if i > 0 && current == nums[i-1] {
			continue
		}

		left := i + 1
		right := length - 1

		for left < right {
			sum := current + nums[left] + nums[right]
			if sum == 0 {
				array = append(array, []int{current, nums[left], nums[right]})
				left++
				right--

				for left < right && nums[left] == nums[left-1] {
					left++
				}

				for left < right && nums[right] == nums[right+1] {
					right--
				}
			} else if sum < 0 {
				left++
			} else {
				right--
			}
		}
	}
	return array
}
