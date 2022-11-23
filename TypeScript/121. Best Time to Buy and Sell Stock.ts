const maxProfit = (prices: number[]): number => {
    let curr: number = 0, maxSoFar: number = 0
    for (let i = 1; i < prices.length; i++) {
        curr = Math.max(0, curr += prices[i] - prices[i - 1]);
        maxSoFar = Math.max(curr, maxSoFar);
    }
    return maxSoFar
}
