const twoSum = (nums, target) => {
    let out
    nums.forEach((num, idx) => {
        for (let i = 0; i < nums.length; i++) {
            if (i !== idx) {
                if ((nums[i] + num) == target) {
                    out = i > idx ? [idx, i] : [i, idx]
                }
            }
        }
    })
    return out
};
