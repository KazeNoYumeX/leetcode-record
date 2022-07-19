/**
 * Definition for singly-linked list.
 * function ListNode(val, next) {
 *     this.val = (val===undefined ? 0 : val)
 *     this.next = (next===undefined ? null : next)
 * }
 */

/**
 * @param {ListNode} l1
 * @param {ListNode} l2
 * @return {ListNode}
 */

const addTwoNumbers = (l1, l2) => {
    let current = new ListNode(0);

    const returnList = current;

    let sum, carry = 0;

    while (l1 || l2 || carry > 0) {
        sum = 0;

        if (l1 !== null) {
            sum += l1.val;
            l1 = l1.next;
        }

        if (l2 !== null) {
            sum += l2.val;
            l2 = l2.next;
        }

        sum += carry;

        current.next = new ListNode(sum % 10);
        current = current.next;

        carry = sum > 9 ? 1 : 0;
    }
    return returnList.next;
};