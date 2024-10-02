// noinspection JSUnusedGlobalSymbols

/**
 * @param {number[]} candies
 * @param {number} extraCandies
 * @return {boolean[]}
 */
const kidsWithCandies = (candies, extraCandies) => {
  const max = Math.max(...candies)
  return candies.map((item) => item + extraCandies >= max)
}
