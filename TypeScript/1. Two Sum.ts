// noinspection JSUnusedGlobalSymbols
const twoSum = (nums: number[], target: number): number[] | null => {
    const map: { [key: number]: number } = {}

    for (let i = 0; i < nums.length; i++) {
        const current: number = nums[i]
        const another: number = target - current

        if (map[another] >= 0) {
            return [map[another], i]
        }

        map[current] = i
    }
    return null
}
