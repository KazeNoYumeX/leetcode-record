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
     */
    public function canFinish(int $numCourses, array $prerequisites): bool
    {
        $graph = [];
        $inDegree = array_fill(0, $numCourses, 0);

        for ($i = 0; $i < count($prerequisites); $i++) {
            $end = $prerequisites[$i][0];
            $start = $prerequisites[$i][1];

            $graph[$start][] = $end;
            $inDegree[$end]++;
        }

        $queue = new SplQueue;
        for ($i = 0; $i < count($inDegree); $i++) {
            if ($inDegree[$i] === 0) {
                $queue->enqueue($i);
            }
        }

        $count = 0;
        while (! $queue->isEmpty()) {
            $current = $queue->dequeue();
            $count++;

            if (isset($graph[$current])) {
                foreach ($graph[$current] as $neighbor) {
                    if (--$inDegree[$neighbor] === 0) {
                        $queue->enqueue($neighbor);
                    }
                }
            }

        }

        return $count === $numCourses;
    }
}
