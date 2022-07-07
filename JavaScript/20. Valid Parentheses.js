/**
 * @param {string} s
 * @return {boolean}
 */
const isValid = (s) => {
    const len = s.length;

    if (len % 2 !== 0) {
        return false;
    }

    const stack = [];
    const close = {
        '}': '{',
        ']': '[',
        ')': '('
    };

    for (let i = 0; i < len; ++i) {
        if (s[i] === '(' || s[i] === '[' || s[i] === '{') {
            stack.push(s[i]);
        } else {
            let last = stack.pop();
            if (last === close[s[i]]) {
                continue;
            } else {
                return false;
            }
        }
    }
    return stack.length === 0;
};