const pivotIndex = (arr: number[]): number => {
    let right: number = arr.reduce((a, c) => a + c, 0);
    let left: number = 0;

    for (let i = 0; i < arr.length; i++) {
        const current: number = arr[i]
        right -= current;

        if (left === right) {
            return i;
        }
        left += current;
    }
    return -1;
};