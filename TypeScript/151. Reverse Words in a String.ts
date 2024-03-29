// noinspection JSUnusedGlobalSymbols
const reverseWords = (s: string) =>
  s
    .trim()
    .split(' ')
    .filter((char) => char.length > 0)
    .reverse()
    .join(' ')
