package main

//goland:noinspection GoUnusedFunction
func levelOrder(root *TreeNode) [][]int {
	if root == nil {
		return [][]int{}
	}

	nodes := []*TreeNode{root}
	var tree [][]int

	for len(nodes) > 0 {
		length := len(nodes)
		var row []int

		for i := 0; i < length; i++ {
			node := nodes[0]
			nodes = nodes[1:]

			if node != nil {
				row = append(row, node.Val)

				if node.Left != nil {
					nodes = append(nodes, node.Left)
				}

				if node.Right != nil {
					nodes = append(nodes, node.Right)
				}
			}
		}

		tree = append(tree, row)

	}

	return tree
}
