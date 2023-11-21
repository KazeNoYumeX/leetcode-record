<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    /**
     * @param  int[][]  $grid
     *
     * @noinspection PhpUnused
     */
    public function equalPairs(array $grid): int
    {
        $rows = [];
        $cols = [];
        $len = count($grid);

        for ($i = 0; $i < $len; $i++) {
            $str = implode('+', $grid[$i]);
            $rows[$str] = isset($rows[$str]) ? $rows[$str] + 1 : 1;

            for ($j = 0; $j < $len; $j++) {
                $cols[$i][] = $grid[$j][$i];
            }
        }

        $count = 0;

        for ($i = 0; $i < $len; $i++) {
            $str = implode('+', $cols[$i]);

            if (array_key_exists($str, $rows)) {
                $count += $rows[$str];
            }
        }

        return $count;
    }
}
