<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    /**
     * @param  int[]  $asteroids
     * @return int[]
     */
    public function asteroidCollision(array $asteroids): array
    {
        $stack = [];

        for ($i = 0; $i < count($asteroids); $i++) {
            $current = $asteroids[$i];

            if ($current > 0) {
                $stack[] = $current;

                continue;
            }

            $absCurrent = abs($current);

            while (count($stack) > 0 && end($stack) > 0 && end($stack) < $absCurrent) {
                array_pop($stack);
            }

            $endStack = end($stack);
            $stackLength = count($stack);

            if ($stackLength > 0 && $endStack === $absCurrent) {
                array_pop($stack);
            } elseif ($stackLength === 0 || $endStack < 0) {
                $stack[] = $current;
            }
        }

        return $stack;
    }
}
