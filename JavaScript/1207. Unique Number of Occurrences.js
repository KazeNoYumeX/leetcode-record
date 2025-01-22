// noinspection JSUnusedGlobalSymbols

/**
 * @param {number[]} arr
 * @return {boolean}
 */
const uniqueOccurrences = (arr) => {
  const map = new Map()

  for (let i = 0; i < arr.length; i++) {
    if (map.has(arr[i])) {
      map.set(arr[i], map.get(arr[i]) + 1)
      continue
    }

    map.set(arr[i], 1)
  }

  const set = new Set(map.values())
  return set.size === map.size
}
