function ListNode(val) {
  this.val = val
  this.next = null
}

// noinspection JSUnusedGlobalSymbols
/**
 * @param {ListNode} head
 * @return {ListNode}
 */
const detectCycle = (head) => {
  let slow = head
  let fast = head

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
