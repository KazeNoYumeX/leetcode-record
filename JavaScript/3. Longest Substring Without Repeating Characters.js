/**
 * @param {string} s
 * @return {number}
 */
const lengthOfLongestSubstring = (s) => {
    if (s === "") return 0;

    const set = [];
    const count = [];
    const string = s.split("");

    for (let i = 0; i < string.length; i++) {
        if (set.includes(string[i])) {
            let length = set.slice(0, set.indexOf(string[i]) + 1).length;
            set.splice(0, length);
        }
        set.push(string[i]);
        count.push(set.length);
    }

    return Math.max(...count);
};