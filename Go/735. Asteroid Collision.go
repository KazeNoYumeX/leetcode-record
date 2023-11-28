package main

//goland:noinspection GoUnusedFunction
func asteroidCollision(asteroids []int) []int {
	var stack []int

	for i := 0; i < len(asteroids); i++ {
		current := asteroids[i]

		if current > 0 {
			stack = append(stack, current)
		} else {
			absCurrent := -current

			for len(stack) > 0 && stack[len(stack)-1] > 0 && stack[len(stack)-1] < absCurrent {
				stack = stack[:len(stack)-1]
			}

			stackLength := len(stack)

			if stackLength > 0 && stack[stackLength-1] == absCurrent {
				stack = stack[:len(stack)-1]
			} else if stackLength == 0 || stack[stackLength-1] < 0 {
				stack = append(stack, current)
			}
		}
	}

	return stack
}
