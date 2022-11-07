/**
 * The knows API is defined in the parent class Relation.
 * isBadVersion(version: number): boolean {
 *     ...
 * };
 */
const solution = (isBadVersion: any) => {
    return (n: number): number => {
        let curr: number = 1
        while (curr < n) {
            const mid = Math.floor((curr + n) / 2)
            if (isBadVersion(mid)) {
                n = mid
            } else {
                curr = mid + 1
            }
        }
        return curr
    }
}
