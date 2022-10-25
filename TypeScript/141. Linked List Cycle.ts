interface ListNode {
    val: number | null | undefined
    next: ListNode | null | undefined
}

const hasCycle = (head: ListNode | null): boolean => {
    let slow: ListNode | null = head, fast: ListNode | null = head

    while (fast && fast.next) {
        slow = slow.next
        fast = fast.next.next

        if (slow == fast) {
            return true
        }
    }
    return false
}
