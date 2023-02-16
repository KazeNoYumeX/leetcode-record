// noinspection JSUnusedGlobalSymbols

interface ListNode {
    val: number | null | undefined
    next: ListNode | null | undefined
}

const reverseList = (head: ListNode | null): ListNode | null => {
    let prev: ListNode | null = null

    while (head) {
        // @ts-ignore
        [head.next, prev, head] = [prev, head, head.next]
    }
    return prev
}
