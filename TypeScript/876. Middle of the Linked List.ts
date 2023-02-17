// noinspection JSUnusedGlobalSymbols

interface ListNode {
    val: number | null | undefined
    next: ListNode | null | undefined
}

const middleNode = (head: ListNode | null): ListNode | null => {
    let slow: ListNode | null = head, fast: ListNode | null | undefined = head

    while (fast && fast.next) {
        // @ts-ignore
        slow = slow.next
        fast = fast.next.next
    }
    return slow
}
