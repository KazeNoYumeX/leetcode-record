// noinspection JSUnusedGlobalSymbols
/**
 * @param {number[]} gain
 * @return {number}
 */
const largestAltitude = (gain) => {
  let max = 0
  let current = 0

  for (let i = 0; i < gain.length; i++) {
    current += gain[i]

    if (current > max) {
      max = current
    }
  }

  return max
}
