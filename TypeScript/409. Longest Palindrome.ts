const longestPalindrome = (s: string): number => {
    if (!s || s == "")
        return 0

    let count = 0
    const check = new Set();

    for (let i = 0; i < s.length; i++) {
        if (check.has(s[i])) {
            check.delete(s[i])
            count++
        } else {
            check.add(s[i])
        }
    }

    if (check.size != 0)
        return count * 2 + 1
    return count * 2
}
