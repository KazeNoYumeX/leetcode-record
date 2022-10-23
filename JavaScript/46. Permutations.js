/**
 * @param {number[]} nums
 * @return {number[][]}
 */
const permute = (nums) => {
    const ret = []
    backtrack(nums, [], ret)
    return ret
}

const backtrack = (list, temp, ret) => {
    if (temp.length === list.length) ret.push([...temp])

    for (const n of list) {
        if (temp.includes(n)) continue
        temp.push(n)
        backtrack(list, temp, ret)
        temp.pop()
    }
}
