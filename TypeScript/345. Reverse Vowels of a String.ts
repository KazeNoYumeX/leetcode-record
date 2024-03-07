// noinspection JSUnusedGlobalSymbols
const reverseVowels = (s: string): string => {
  const length = s.length

  if (length <= 1) {
    return s
  }

  const vowels = new Set(['a', 'e', 'i', 'o', 'u'])
  let left = 0
  let right = length - 1
  const arr = s.split('')

  while (left < length) {
    if (left >= right) {
      break
    }

    if (vowels.has(s[left].toLowerCase())) {
      while (right > left) {
        if (vowels.has(s[right].toLowerCase())) {
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
