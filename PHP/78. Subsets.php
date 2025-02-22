<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    /**
     * @param  int[]  $nums
     * @return int[][]
     */
    public function subsets(array $nums): array
    {
        $subsets = [];

        $this->backtrack($subsets, [], $nums, 0);

        return $subsets;
    }

    private function backtrack(array &$subsets, array $current, array $nums, int $start): void
    {
        $subsets[] = $current;

        for ($i = $start; $i < count($nums); $i++) {
            $current[] = $nums[$i];
            $this->backtrack($subsets, $current, $nums, $i + 1);
            array_pop($current);
        }
    }
}
