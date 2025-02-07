<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    /**
     * @return int[][]
     */
    public function combine(int $n, int $k): array
    {
        $combinations = [];

        $this->dfs($combinations, [], $n, $k, 1);

        return $combinations;
    }

    public function dfs(array &$combinations, array $level, int $n, int $k, int $index): void
    {
        $length = count($level);
        if ($length === $k) {
            $combinations[] = $level;

            return;
        }

        for ($i = $index; $i <= $n - ($k - $length) + 1; $i++) {
            $level[] = $i;
            $this->dfs($combinations, $level, $n, $k, $i + 1);
            array_pop($level);
        }
    }
}
