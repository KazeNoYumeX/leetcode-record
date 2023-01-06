interface objectStr {
    [key: string]: string;
}

const isIsomorphic = (s: string, t: string): boolean => {
    const obj: objectStr = {}

    if (s.length !== t.length)
        return false

    for (let i = 0; i < s.length; i++) {
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
