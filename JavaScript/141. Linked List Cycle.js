function ListNode(val) {
  this.val = val
  this.next = null
}

// noinspection JSUnusedGlobalSymbols
/**
 * @param {ListNode} head
 * @return {boolean}
 */
const hasCycle = (head) => {
  let slow = head
  let fast = head

  while (fast !== null && fast.next !== null) {
    slow = slow.next
    fast = fast.next.next

    if (slow === fast) {
      return true
    }
  }
  return false
}
