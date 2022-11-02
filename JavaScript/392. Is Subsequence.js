/**
 * @param {string} s
 * @param {string} t
 * @return {boolean}
 */
const isSubsequence = (s, t) => {
    const counter = t.split('').reduce((acc, el) => s[acc] === el ? acc + 1 : acc, 0)
    return counter === s.length
}
