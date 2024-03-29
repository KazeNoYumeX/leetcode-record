/**
 * Definition for singly-linked list.
 * class ListNode {
 *     val: number
 *     next: ListNode | null
 *     constructor(val?: number, next?: ListNode | null) {
 *         this.val = (val===undefined ? 0 : val)
 *         this.next = (next===undefined ? null : next)
 *     }
 * }
 */

interface ListNode {
    val: number | null | undefined;
    next: ListNode | null | undefined;
}

const mergeTwoLists = (list1: ListNode | null, list2: ListNode | null): ListNode | null => {
    if (list1 === null) {
        return list2
    }
    if (list2 === null) {
        return list1
    }

    // @ts-ignore
    if (list1.val < list2.val) {
        // @ts-ignore
        list1.next = mergeTwoLists(list1.next, list2);
        return list1
    } else {
        // @ts-ignore
        list2.next = mergeTwoLists(list1, list2.next);
        return list2
    }
}
