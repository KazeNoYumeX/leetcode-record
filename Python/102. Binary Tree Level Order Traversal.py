from typing import Optional, List


# Definition for a binary tree node.
class TreeNode:
    def __init__(self, val=0, left=None, right=None):
        self.val = val
        self.left = left
        self.right = right


class Solution:
    def levelOrder(self, root: Optional[TreeNode]) -> List[List[int]]:
        if not root:
            return []

        ret, level = [], [root]
        while level:
            ret.append([node.val for node in level])
            level = [child for node in level for child in (node.left, node.right) if child]
        return ret
