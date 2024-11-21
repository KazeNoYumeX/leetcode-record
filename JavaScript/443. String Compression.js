// noinspection JSUnusedGlobalSymbols
/**
 * @param {string[]} chars
 * @return {number}
 */
const compress = (chars) => {
  const length = chars.length
  let index = 0

  for (let i = 0; i < length; ) {
    const currentChar = chars[i]
    let count = 0

    while (i < length && chars[i] === currentChar) {
      count++
      i++
    }

    chars[index++] = currentChar

    if (count > 1) {
      for (const char of count.toString()) {
        chars[index++] = char
      }
    }
  }
  return index
}
