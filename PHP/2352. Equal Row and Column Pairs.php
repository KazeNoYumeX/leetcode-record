<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    /**
     * @param  int[][]  $grid
     */
    public function equalPairs(array $grid): int
    {
        $rows = [];
        $cols = [];
        $length = count($grid);

        for ($i = 0; $i < $length; $i++) {
            $str = implode('+', $grid[$i]);
            $rows[$str] = isset($rows[$str]) ? $rows[$str] + 1 : 1;

            for ($j = 0; $j < $length; $j++) {
                $cols[$i][] = $grid[$j][$i];
            }
        }

        $count = 0;
        for ($i = 0; $i < $length; $i++) {
            $str = implode('+', $cols[$i]);

            if (array_key_exists($str, $rows)) {
                $count += $rows[$str];
            }
        }

        return $count;
    }
}
