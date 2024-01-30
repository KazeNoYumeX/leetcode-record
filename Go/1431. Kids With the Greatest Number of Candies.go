package main

import "slices"

//goland:noinspection GoUnusedFunction
func kidsWithCandies(candies []int, extraCandies int) []bool {
	maxCandies := slices.Max(candies)

	candiesWithExtra := make([]bool, len(candies))

	for i, candy := range candies {
		candiesWithExtra[i] = candy+extraCandies >= maxCandies
	}

	return candiesWithExtra
}
