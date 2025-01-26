<?php

/**
 * @noinspection PhpIllegalPsrClassPathInspection
 * @noinspection PhpMultipleClassDeclarationsInspection
 * @noinspection PhpUnused
 */
class Solution
{
    /**
     * @param  string[]  $wordList
     */
    public function ladderLength(string $beginWord, string $endWord, array $wordList): int
    {
        $wordList = array_flip($wordList);
        if (! array_key_exists($endWord, $wordList)) {
            return 0;
        }

        $beginSet = [$beginWord => true];
        $endSet = [$endWord => true];
        $visited = [];

        $step = 1;
        $length = strlen($beginWord);

        while (! empty($beginSet) && ! empty($endSet)) {
            $nextSet = [];

            foreach ($beginSet as $word => $value) {
                $chars = str_split($word);
                for ($i = 0; $i < $length; $i++) {
                    $old = $chars[$i];
                    for ($j = 0; $j < 26; $j++) {
                        $chars[$i] = chr(97 + $j);
                        $newWord = implode($chars);

                        if (array_key_exists($newWord, $endSet)) {
                            return $step + 1;
                        }

                        if (array_key_exists($newWord, $wordList) && ! array_key_exists($newWord, $visited)) {
                            $nextSet[$newWord] = true;
                            $visited[$newWord] = true;
                        }

                        $chars[$i] = $old;
                    }
                }
            }

            $beginSet = $nextSet;
            $step++;

            if (count($beginSet) > count($endSet)) {
                $temp = $beginSet;
                $beginSet = $endSet;
                $endSet = $temp;
            }
        }

        return 0;
    }
}
