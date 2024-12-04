// noinspection JSUnusedGlobalSymbols
const isSubsequence = (s: string, t: string): boolean => {
  const lengthS = s.length
  const lengthT = t.length

  if (lengthS > lengthT) {
    return false
  }

  if (lengthS === 0) {
    return true
  }

  let subsequence = 0

  for (let i = 0; i < lengthT; i++) {
    if (s[subsequence] === t[i]) {
      subsequence++
    }
  }

  return lengthS === subsequence
}
