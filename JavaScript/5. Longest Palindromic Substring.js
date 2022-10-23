/**
 * @param {string} s
 * @return {string}
 */
const longestPalindrome = (s) => {
    let longest = ''
    const len = s.length

    if (len <= 1) {
        return s
    }

    const expand = (str1, str2) => {
        while (str1 >= 0 && str2 < len && s[str1] === s[str2]) {
            if (str2 - str1 + 1 > longest.length) {
                longest = s.slice(str1, str2 + 1)
            }
            str1--
            str2++
        }
    }

    for (let i = 0; i < len; i++) {
        expand(i, i)
        expand(i, i + 1)
    }

    return longest
}