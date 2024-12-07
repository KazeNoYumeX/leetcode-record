// noinspection JSUnusedGlobalSymbols
/**
 * @param {number[]} height
 * @return {number}
 */
const maxArea = (height) => {
  let start = 0
  let end = height.length - 1
  let max = 0
  const highest = Math.max(...height)

  while (end * highest > max) {
    const left = height[start]
    const right = height[end]

    const min = Math.min(left, right)
    max = Math.max(max, min * (end - start))

    if (left < right) {
      start++
    } else {
      end--
    }
  }

  return max
}
