// noinspection JSUnusedGlobalSymbols
const mergeAlternately = (word1: string, word2: string): string => {
    const length = Math.max(word1.length, word2.length)
    let result = ''

    for (let i = 0; i < length; i++) {
        result += (word1[i] || '') + (word2[i] || '')
    }

    return result
};