class ListNode {
  val: number
  next: ListNode | null
  constructor(val?: number, next?: ListNode | null) {
    this.val = val === undefined ? 0 : val
    this.next = next === undefined ? null : next
  }
}

// noinspection JSUnusedGlobalSymbols
const hasCycle = (head: ListNode | null): boolean => {
  if (head === null || head.next === null) {
    return false
  }

  let slow: ListNode | null | undefined = head
  let fast: ListNode | null = head

  while (fast !== null && fast.next !== null) {
    slow = slow?.next
    fast = fast.next.next

    if (slow === fast) {
      return true
    }
  }
  return false
}
