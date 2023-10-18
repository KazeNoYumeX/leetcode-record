<?php

/* The isBadVersion API is defined in the parent class VersionControl.
      public function isBadVersion($version){} */

class Solution extends VersionControl
{
    /**
     * @param  int  $n
     */
    public function firstBadVersion($n): int
    {
        $curr = 1;

        while ($curr < $n) {
            $mid = intval(($curr + $n) / 2);
            if ($this->isBadVersion($mid)) {
                $n = $mid;
            } else {
                $curr = $mid + 1;
            }
        }

        return $curr;
    }
}
