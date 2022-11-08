const search = (nums: number[], target: number): number => {
    let lo: number = 0, hi: number = nums.length - 1

    while (lo < hi) {
        let mid: number = lo + Math.floor((hi - lo + 1) / 2)
        if (target < nums[mid]) {
            hi = mid - 1
        } else {
            lo = mid
        }
    }
    return nums[lo] == target ? lo : -1
}
