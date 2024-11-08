// noinspection JSUnusedGlobalSymbols
const reverseWords = (s: string) =>
  s
    .split(' ')
    .filter((char) => char !== '')
    .reverse()
    .join(' ')
