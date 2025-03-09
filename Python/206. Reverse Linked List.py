from typing import Optional


class ListNode:
    def __init__(self, val=0, next=None):
        self.val = val
        self.next = next


# noinspection PyMethodMayBeStatic, PyPep8Naming
class Solution:
    def reverseList(self, head: Optional[ListNode]) -> Optional[ListNode]:
        return self.reverse(head, None)

    def reverse(self, head: Optional[ListNode], next: Optional[ListNode]) -> Optional[ListNode]:
        if head is None:
            return next

        current = head.next
        head.next = next

        return self.reverse(current, head)
