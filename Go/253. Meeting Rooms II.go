package main

import (
	"container/heap"
	"sort"
)

//goland:noinspection GoUnusedFunction
func minMeetingRooms(intervals [][]int) int {
	if len(intervals) <= 1 {
		return len(intervals)
	}

	sort.Slice(intervals, func(i, j int) bool {
		return intervals[i][0] < intervals[j][0]
	})

	// Space: O(n)
	meetings := &MinHeap{
		items: make([]int, 0),
	}

	heap.Push(meetings, intervals[0][1])
	rooms := 1

	for _, interval := range intervals[1:] {
		if !meetings.IsEmpty() && interval[0] >= meetings.Top() {
			heap.Pop(meetings)
		}

		heap.Push(meetings, interval[1])
		rooms = max(rooms, meetings.Size())
	}

	return rooms
}

/* MinHeap package */

// MinHeap implements container/heap.Interface.
type MinHeap struct {
	items []int
}

func (h *MinHeap) Len() int {
	return h.Size()
}

func (h *MinHeap) Less(i, j int) bool {
	return h.items[i] < h.items[j]
}

func (h *MinHeap) Swap(i, j int) {
	h.items[i], h.items[j] = h.items[j], h.items[i]
}

func (h *MinHeap) Push(x interface{}) {
	h.items = append(h.items, x.(int))
}

func (h *MinHeap) Pop() interface{} {
	top := h.Top()
	h.items = h.items[:h.Size()-1]
	return top
}

func (h *MinHeap) Top() int {
	return h.items[0]
}

func (h *MinHeap) Size() int {
	return len(h.items)
}

func (h *MinHeap) IsEmpty() bool {
	return h.Size() == 0
}
