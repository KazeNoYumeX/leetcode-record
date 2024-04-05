// noinspection JSUnusedGlobalSymbols
const mergeIntervals = (intervals: number[][]): number[][] => {
  const length = intervals.length

  if (length <= 1) {
    return intervals
  }

  intervals.sort((a, b) => a[0] - b[0])

  let interval = intervals[0]
  const mergedIntervals: number[][] = []

  for (let i = 0; i < length; i++) {
    if (interval[1] >= intervals[i][0]) {
      interval[1] = Math.max(interval[1], intervals[i][1])
    } else {
      mergedIntervals.push(interval)
      interval = intervals[i]
    }
  }

  mergedIntervals.push(interval)

  return mergedIntervals
}
