// noinspection JSUnusedGlobalSymbols

/**
 * @param {string} s
 * @return {string}
 */
const reverseWords = (s) =>
  s
    .trim()
    .split(' ')
    .filter((char) => char.length > 0)
    .reverse()
    .join(' ')
