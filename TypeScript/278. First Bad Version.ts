// noinspection JSUnusedGlobalSymbols
// eslint-disable-next-line @typescript-eslint/no-explicit-any
const solution = (isBadVersion: any) => {
  return (n: number): number => {
    let left = 1
    while (left <= n) {
      const mid = left + Math.floor((n - left) / 2)
      if (isBadVersion(mid)) {
        n = mid - 1
      } else {
        left = mid + 1
      }
    }
    return left
  }
}
