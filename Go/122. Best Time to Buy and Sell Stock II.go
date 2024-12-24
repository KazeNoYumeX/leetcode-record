package main

//goland:noinspection GoUnusedFunction
func maxProfitTwo(prices []int) int {
	profit := 0
	prev := prices[0]

	for _, price := range prices {
		if price > prev {
			profit += max(0, price-prev)
		}

		prev = price
	}

	return profit
}
