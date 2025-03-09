// noinspection JSUnusedGlobalSymbols
/**
 * @param {ListNode} head
 * @return {ListNode}
 */
const reverseList = (head) => {
  return reverse(head, null)
}

const reverse = (head, next) => {
  if (head === null) {
    return next
  }

  const current = head.next
  head.next = next

  return reverse(current, head)
}
