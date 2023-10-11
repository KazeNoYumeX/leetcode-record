package main

//goland:noinspection GoUnusedFunction
func canPlaceFlowers(flowerbed []int, n int) bool {
	if n == 0 {
		return true
	}

	length := len(flowerbed)
	i := 0

	for i < length {
		if flowerbed[i] == 1 {
			i += 2
		} else if i+1 >= length || flowerbed[i+1] == 0 {
			n--
			i += 2
		} else {
			i += 3
		}

		if n == 0 {
			return true
		}
	}

	return false
}
