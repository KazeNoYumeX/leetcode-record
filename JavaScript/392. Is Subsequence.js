// noinspection JSUnusedGlobalSymbols

/**
 * @param {string} s
 * @param {string} t
 * @return {boolean}
 */
const isSubsequence = (s, t) => {
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
