// noinspection JSUnusedGlobalSymbols
const moveZeroes = (nums: number[]): void => {
    const length = nums.length
    let zeroSize = 0

    for (let i = 0; i < length; i++) {
        if (nums[i] == 0) {
            zeroSize++
        } else if (zeroSize > 0) {
            nums[i - zeroSize] = nums[i]
            nums[i] = 0
        }
    }
}
