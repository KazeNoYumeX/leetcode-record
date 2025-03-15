// noinspection JSUnusedGlobalSymbols

/**
 * @param {number[][]} intervals
 * @param {number[]} newInterval
 * @return {number[][]}
 */
const insert = (intervals, newInterval) => {
  const result = []

  for (let i = 0; i < intervals.length; i++) {
    const current = intervals[i]

    if (newInterval.length === 0 || current[1] < newInterval[0]) {
      result.push(current)
    } else if (current[0] > newInterval[1]) {
      result.push(newInterval)
      result.push(current)
      newInterval = []
    } else {
      const start = Math.min(newInterval[0], current[0])
      const end = Math.max(newInterval[1], current[1])
      newInterval = [start, end]
    }
  }

  if (newInterval.length !== 0) {
    result.push(newInterval)
  }
  return result
}
