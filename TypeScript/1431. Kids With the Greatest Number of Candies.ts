// noinspection JSUnusedGlobalSymbols
const kidsWithCandies = (candies: number[], extraCandies: number): boolean[] => {
  const max: number = Math.max(...candies)
  return candies.map((item: number): boolean => item + extraCandies >= max)
}
