// noinspection JSUnusedGlobalSymbols
const canPlaceFlowers = (flowerbed: number[], n: number): boolean => {
    if (n == 0) {
        return true
    }

    const length = flowerbed.length
    let i = 0

    while (i < length) {
        if (flowerbed[i] == 1) {
            i += 2
        } else if (i + 1 >= length || flowerbed[i + 1] == 0) {
            n--
            i += 2
        } else {
            i += 3
        }

        if (n == 0) {
            return true
        }
    }

    return false
}
