interface ListNode {
    val: number | null | undefined
    next: ListNode | null | undefined
}

const middleNode = (head: ListNode | null): ListNode | null => {
    let slow: ListNode | null = head, fast: ListNode | null = head

    while (fast && fast.next) {
        slow = slow.next
        fast = fast.next.next
    }
    return slow
}
