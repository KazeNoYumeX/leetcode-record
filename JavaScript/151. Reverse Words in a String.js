// noinspection JSUnusedGlobalSymbols

/**
 * @param {string} s
 * @return {string}
 */
const reverseWords = (s) =>
  s
    .split(' ')
    .filter((char) => char !== '')
    .reverse()
    .join(' ')
