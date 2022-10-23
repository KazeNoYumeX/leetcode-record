/**
 * @param {number[]} nums
 * @param {number} target
 * @return {number[]}
 */
const twoSum = (nums, target) => {
    const map = {}

    for (let i = 0; i < nums.length; i++) {
        const current = nums[i]
        const another = target - current

        if (map[another] >= 0) {
            return [map[another], i]
        }

        map[current] = i
    }
    return null
}
