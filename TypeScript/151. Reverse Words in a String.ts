// noinspection JSUnusedGlobalSymbols
const reverseWords = (s: string): string => {
    const ret = []
    let word = ''
    for (let i = 0; i < s.length; i++) {
        if (s[i] === ' ') {
            if (word) {
                word && ret.unshift(word)
                word = ''
            }
        } else {
            word += s[i]
        }
    }

    word && ret.unshift(word)
    return ret.join(' ')
}
