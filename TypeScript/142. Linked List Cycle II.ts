// noinspection JSUnusedGlobalSymbols

interface ListNode {
    val: number | null | undefined
    next: ListNode | null | undefined
}

const detectCycle = (head: ListNode | null): ListNode | null => {
    let slow: ListNode | null = head, fast: ListNode | null | undefined = head

    while (fast && fast.next) {
        // @ts-ignore
        slow = slow.next
        fast = fast.next.next

        if (slow == fast) {
            slow = head
            while (slow !== fast) {
                // @ts-ignore
                slow = slow.next
                // @ts-ignore
                fast = fast.next
            }
            return slow
        }
    }
    return null
}
