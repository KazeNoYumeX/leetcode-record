package main

//goland:noinspection GoUnusedFunction
func minDepth(root *TreeNode) int {
	if root == nil {
		return 0
	}

	depth := 0
	nodes := []*TreeNode{root}

	for len(nodes) > 0 {
		size := len(nodes)

		for i := 0; i < size; i++ {
			node := nodes[0]
			nodes = nodes[1:]

			if node.Left == nil && node.Right == nil {
				return depth + 1
			}

			if node.Left != nil {
				nodes = append(nodes, node.Left)
			}

			if node.Right != nil {
				nodes = append(nodes, node.Right)
			}
		}

		depth++
	}

	return depth
}

type TreeNode struct {
	Val   int
	Left  *TreeNode
	Right *TreeNode
}
