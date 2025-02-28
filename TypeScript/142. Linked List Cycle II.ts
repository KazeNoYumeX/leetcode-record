// noinspection JSUnusedGlobalSymbols
const detectCycle = (head: ListNode | null): ListNode | null => {
  if (head === null || head.next === null) {
    return null
  }

  let slow: ListNode | null | undefined = head
  let fast: ListNode | null | undefined = head

  while (fast !== null && fast.next !== null) {
    slow = slow?.next
    fast = fast.next.next
    if (slow === fast) {
      fast = head
      while (slow !== fast) {
        slow = slow?.next
        fast = fast?.next
      }

      return slow
    }
  }
  return null
}
