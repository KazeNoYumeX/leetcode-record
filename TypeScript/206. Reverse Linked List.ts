// noinspection JSUnusedGlobalSymbols
const reverseList = (head: ListNode | null): ListNode | null => {
  return reverse(head, null)
}

const reverse = (head: ListNode | null, next: ListNode | null): ListNode | null => {
  if (head === null) {
    return next
  }

  const current = head.next
  head.next = next

  return reverse(current, head)
}
