// noinspection JSUnusedGlobalSymbols
const maxVowels = (s: string, k: number): number => {
  let max = 0

  for (let i = 0; i < k; i++) {
    if (vowelCheck(s[i])) {
      max++
    }
  }

  let current = max
  for (let i = k; i < s.length; i++) {
    if (vowelCheck(s[i - k])) {
      current--
    }

    if (vowelCheck(s[i])) {
      current++
    }

    if (current > max) {
      max = current
    }
  }

  return max
}

const vowelCheck = (char: string): boolean => char == 'a' || char == 'e' || char == 'i' || char == 'o' || char == 'u'
