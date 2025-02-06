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
    public function permuteUnique(array $nums): array
    {
        $permutations = [];

        sort($nums);

        $used = array_fill(0, count($nums), false);

        $this->backtrack($permutations, [], $nums, $used);

        return $permutations;
    }

    public function backtrack(array &$permutations, array $list, array $nums, array $used): void
    {
        $length = count($nums);
        if (count($list) === $length) {
            $permutations[] = $list;

            return;
        }

        for ($i = 0; $i < $length; $i++) {
            if ($used[$i] || ($i > 0 && $nums[$i] === $nums[$i - 1] && ! $used[$i - 1])) {
                continue;
            }

            $used[$i] = true;

            $list[] = $nums[$i];
            $this->backtrack($permutations, $list, $nums, $used);
            array_pop($list);

            $used[$i] = false;
        }
    }
}
