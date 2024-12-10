// noinspection JSUnusedGlobalSymbols

const maxOperations = (nums: number[], k: number): number => {
  const numCount = new Map<number, number>()

  for (const num of nums) {
    numCount.set(num, (numCount.get(num) ?? 0) + 1)
  }

  let operations = 0

  for (const [num, count] of numCount.entries()) {
    if (numCount.has(k - num)) {
      operations += Math.min(count, numCount.get(k - num) ?? 0)
    }
  }

  return Math.floor(operations / 2)
}
