// noinspection JSUnusedGlobalSymbols
/**
 * @param {string} word1
 * @param {string} word2
 * @return {string}
 */
const mergeAlternately = (word1, word2) => {
  const length = Math.max(word1.length, word2.length)
  let result = ''

  for (let i = 0; i < length; i++) {
    result += (word1[i] || '') + (word2[i] || '')
  }

  return result
}
