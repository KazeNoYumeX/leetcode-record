<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    /**
     * @param  int[][]  $prerequisites
     * @return int[]
     */
    public function findOrder(int $numCourses, array $prerequisites): array
    {
        $graph = [];
        $inDegree = array_fill(0, $numCourses, 0);

        for ($i = 0; $i < count($prerequisites); $i++) {
            $start = $prerequisites[$i][1];
            $end = $prerequisites[$i][0];

            $graph[$start][] = $end;
            $inDegree[$end]++;
        }

        $queue = new SplQueue;
        for ($i = 0; $i < count($inDegree); $i++) {
            if ($inDegree[$i] === 0) {
                $queue->enqueue($i);
            }
        }

        $courses = [];
        while (! $queue->isEmpty()) {
            $current = $queue->dequeue();
            $courses[] = $current;

            if (isset($graph[$current])) {
                foreach ($graph[$current] as $neighbor) {
                    if (--$inDegree[$neighbor] == 0) {
                        $queue->enqueue($neighbor);
                    }
                }
            }
        }

        return count($courses) === $numCourses ? $courses : [];
    }
}
