// noinspection JSUnusedGlobalSymbols

/**
 * @param {string} word1
 * @param {string} word2
 * @return {boolean}
 */
const closeStrings = (word1, word2) => {
  if (word1.length !== word2.length) {
    return false
  }

  const word1Map = new Map()
  const word2Map = new Map()

  for (const char of word1) {
    word1Map.set(char, (word1Map.get(char) || 0) + 1)
  }

  for (const char of word2) {
    if (!word1Map.has(char)) {
      return false
    }
    word2Map.set(char, (word2Map.get(char) || 0) + 1)
  }

  const word1Counts = [...word1Map.values()].sort((a, b) => a - b)
  const word2Counts = [...word2Map.values()].sort((a, b) => a - b)

  for (let i = 0; i < word1Counts.length; i++) {
    if (word1Counts[i] !== word2Counts[i]) {
      return false
    }
  }

  return true
}
