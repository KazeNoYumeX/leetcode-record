package main

//goland:noinspection GoUnusedFunction
func maxProfit(prices []int) int {
	minimum := 1<<31 - 1
	maximum := 0

	for _, price := range prices {
		if price < minimum {
			minimum = price
		}

		profit := price - minimum
		if profit > maximum {
			maximum = profit
		}
	}

	return maximum
}
