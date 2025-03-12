package main

//goland:noinspection GoUnusedFunction
func splitArray(nums []int, k int) int {
	sum := 0
	maximum := 0

	for _, num := range nums {
		sum += num
		maximum = max(maximum, num)
	}

	return binarySearch(nums, k, sum, maximum)
}

func binarySearch(nums []int, k int, high int, low int) int {
	for low <= high {
		mid := low + (high-low)/2
		if validSearch(nums, k, mid) {
			high = mid - 1
		} else {
			low = mid + 1
		}
	}

	return low
}

func validSearch(nums []int, k int, sum int) bool {
	total := 0
	count := 1

	for _, num := range nums {
		total += num
		if total > sum {
			total = num
			count++
			if count > k {
				return false
			}
		}
	}

	return true
}
