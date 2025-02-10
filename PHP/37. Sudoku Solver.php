<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    private array $rows = [];

    private array $cols = [];

    private array $boxes = [];

    private array $emptyCells = [];

    /**
     * @param  string[][]  $board
     */
    public function solveSudoku(array &$board): void
    {
        $this->initializeState($board);
        $this->dfs($board, 0);
    }

    private function initializeState(array $board): void
    {
        $length = count($board);
        for ($i = 0; $i < $length; $i++) {
            $this->rows[$i] = [];
            $this->cols[$i] = [];
            $this->boxes[$i] = [];
        }

        // 遍歷整個盤面，記錄已填入的數字
        for ($i = 0; $i < $length; $i++) {
            for ($j = 0; $j < count($board[$i]); $j++) {
                if ($board[$i][$j] === '.') {
                    $this->emptyCells[] = [$i, $j];
                } else {
                    $num = (int) $board[$i][$j];
                    $boxIndex = intdiv($i, 3) * 3 + intdiv($j, 3);
                    $this->rows[$i][$num] = true;
                    $this->cols[$j][$num] = true;
                    $this->boxes[$boxIndex][$num] = true;
                }
            }
        }

        // 優先填寫可能選擇最少的空格（排序空格，減少搜索樹深度）
        usort($this->emptyCells, fn ($a, $b) => $this->possibleValues($a[0], $a[1]) <=> $this->possibleValues($b[0], $b[1]));
    }

    private function dfs(array &$board, int $index): bool
    {
        // 全部填滿，返回成功
        if ($index === count($this->emptyCells)) {
            return true;
        }

        [$i, $j] = $this->emptyCells[$index];
        $boxIndex = intdiv($i, 3) * 3 + intdiv($j, 3);

        // 試填 1-9
        for ($num = 1; $num <= 9; $num++) {
            if (isset($this->rows[$i][$num]) || isset($this->cols[$j][$num]) || isset($this->boxes[$boxIndex][$num])) {
                continue; // 這個數字已經出現在該行、列或 3x3 區塊內
            }

            // 填入數字
            $char = (string) $num;
            $board[$i][$j] = $char;
            $this->rows[$i][$num] = true;
            $this->cols[$j][$num] = true;
            $this->boxes[$boxIndex][$num] = true;

            if ($this->dfs($board, $index + 1)) {
                return true;
            }

            // 回溯
            $board[$i][$j] = '.';
            unset($this->rows[$i][$num]);
            unset($this->cols[$j][$num]);
            unset($this->boxes[$boxIndex][$num]);
        }

        // 找不到合適的填法
        return false;
    }

    private function possibleValues(int $i, int $j): int
    {
        $boxIndex = intdiv($i, 3) * 3 + intdiv($j, 3);
        $count = 0;

        for ($num = 1; $num <= 9; $num++) {
            if (! isset($this->rows[$i][$num]) && ! isset($this->cols[$j][$num]) && ! isset($this->boxes[$boxIndex][$num])) {
                $count++;
            }
        }

        return $count;
    }
}
