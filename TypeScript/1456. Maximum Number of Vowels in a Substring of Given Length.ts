// noinspection JSUnusedGlobalSymbols
const maxVowels = (s: string, k: number): number =>{
    let max = 0
    const vowels: { [key: string]: boolean } = {
        a: true,
        e: true,
        i: true,
        o: true,
        u: true,
    }

    for (let i = 0; i < k; i++) {
        if (vowels[s[i]]) {
            max++
        }
    }

    let secondVowels = max
    for (let i = k; i < s.length; i++) {
        if (vowels[s[i - k]]) {
            secondVowels--
        }

        if (vowels[s[i]]) {
            secondVowels++
        }

        if (secondVowels > max) {
            max = secondVowels
        }
    }

    return max
}
