// noinspection JSUnusedGlobalSymbols
const isSubsequence = (s: string, t: string): boolean => {
    const counter = t.split('').reduce<number>((acc, el) => s[acc] === el ? acc + 1 : acc, 0)
    return counter === s.length
}
