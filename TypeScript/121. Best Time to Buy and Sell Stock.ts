// noinspection JSUnusedGlobalSymbols
const maxProfit = (prices: number[]): number => {
  let min = Infinity
  let max = 0

  prices.forEach((price) => {
    if (price < min) {
      min = price
    }

    const profit = price - min
    if (profit > max) {
      max = profit
    }
  })

  return max
}
