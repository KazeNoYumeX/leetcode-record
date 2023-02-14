// noinspection JSUnusedGlobalSymbols

interface combineObj {
    [key: string]: string;
}

const isIsomorphic = (s: string, t: string): boolean => {
    const count:number = s.length

    if (count !== t.length)
        return false

    const obj: combineObj = {}

    for (let i = 0; i < count; i++) {
        const strS: string = s[i]
        const strT: string = t[i]

        if (!obj['s' + strS])
            obj['s' + strS] = strT

        if (!obj['t' + strT])
            obj['t' + strT] = strS

        if (strT != obj['s' + strS] || strS != obj['t' + strT])
            return false
    }
    return true
}
