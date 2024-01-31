<?php

/**
 *  @noinspection PhpIllegalPsrClassPathInspection, PhpMultipleClassDeclarationsInspection
 */
class Solution
{
    private array $entrance;

    private int $width;

    private int $length;

    public function __construct()
    {
        $this->entrance = [];
        $this->width = 0;
        $this->length = 0;
    }

    public function isExit(int $x, int $y): bool
    {
        if ($x === 0 || $y === 0 || $x === $this->width - 1 || $y === $this->length - 1) {
            return $x !== $this->entrance[0] || $y !== $this->entrance[1];
        }

        return false;
    }

    /**
     * @param  string[][]  $maze
     * @param  int[]  $entrance
     */
    public function nearestExit(array $maze, array $entrance): int
    {
        $this->width = count($maze);
        $this->length = count($maze[0]);
        $this->entrance = $entrance;

        $quits = [$entrance];
        $maze[$entrance[0]][$entrance[1]] = 'x';
        $steps = 0;

        $dirs = [
            [-1, 0],
            [1, 0],
            [0, -1],
            [0, 1],
        ];

        while (count($quits)) {
            $qLen = count($quits);

            for ($i = 0; $i < $qLen; $i++) {
                [$x, $y] = array_shift($quits);

                if ($this->isExit($x, $y)) {
                    return $steps;
                }

                for ($j = 0; $j < count($dirs); $j++) {
                    $nx = $x + $dirs[$j][0];
                    $ny = $y + $dirs[$j][1];

                    if ($nx >= 0 && $nx < $this->width && $ny >= 0 && $ny < $this->length && $maze[$nx][$ny] === '.') {
                        $maze[$nx][$ny] = 'x';
                        $quits[] = [$nx, $ny];
                    }
                }
            }
            $steps++;
        }

        return -1;
    }
}
