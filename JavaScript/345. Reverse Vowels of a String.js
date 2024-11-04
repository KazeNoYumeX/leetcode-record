// noinspection JSUnusedGlobalSymbols

/**
 * @param {string} s
 * @return {string}
 */
const reverseVowels = (s) => {
  const length = s.length

  if (length <= 1) {
    return s
  }

  const vowels = new Set(['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'])

  const arr = s.split('')

  let left = 0
  let right = length - 1

  while (left < length) {
    if (left >= right) {
      break
    }

    if (vowels.has(s[left])) {
      while (right > left) {
        if (vowels.has(s[right])) {
          arr[left] = s[right]
          arr[right] = s[left]
          right--
          break
        }

        right--
      }
    }

    left++
  }

  return arr.join('')
}
