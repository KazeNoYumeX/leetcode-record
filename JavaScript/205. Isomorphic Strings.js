/**
 * @param {string} s
 * @param {string} t
 * @return {boolean}
 */
const isIsomorphic = (s, t) => {
    const obj = {}

    for (let i = 0; i < s.length; i++) {
        const strS = s[i]
        const strT = t[i]

        if (!obj['s' + strS]) obj['s' + strS] = strT
        if (!obj['t' + strT]) obj['t' + strT] = strS
        if (strT !== obj['s' + strS] || strS !== obj['t' + strT]) return false
    }
    return true
}