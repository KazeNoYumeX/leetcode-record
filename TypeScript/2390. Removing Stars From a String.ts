// noinspection JSUnusedGlobalSymbols
const removeStars = (s: string): string => {
    const arr: string[] = []

    for (let i = 0; i < s.length; i++) {
        const word = s[i]
        if (word === '*') {
            arr.pop()
        } else {
            arr.push(word)
        }
    }

    return arr.join('')
}
