// noinspection JSUnusedGlobalSymbols

/**
 * @param {string} s
 * @return {string}
 */
const removeStars = (s) => {
  const arr = []

  for (let i = 0; i < s.length; i++) {
    const word = s[i]
    if (word === '*') {
      arr.pop()
    } else {
      arr.push(word)
    }
  }

  return arr.join('')
}
