<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution extends VersionControl
{
    public function firstBadVersion(int $n): int
    {
        $left = 1;

        while ($left <= $n) {
            $mid = $left + (int) (($n - $left) / 2);
            if ($this->isBadVersion($mid)) {
                $n = $mid - 1;
            } else {
                $left = $mid + 1;
            }
        }

        return $left;
    }
}

class VersionControl
{
    public function isBadVersion(int $version): bool
    {
        return $version;
    }
}
