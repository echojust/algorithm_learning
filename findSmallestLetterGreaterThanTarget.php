<?php

class Solution
{

    /**
     *
     * 给你一个排序后的字符列表 letters ，列表中只包含小写英文字母。另给出一个目标字母 target，请你寻找在这一有序列表里比目标字母大的最小字母。
     *
     * 在比较时，字母是依序循环出现的。举个例子：
     *
     * 如果目标字母 target = 'z' 并且字符列表为 letters = ['a', 'b']，则答案返回 'a'
     * @param String[] $letters
     * @param String $target
     * @return String
     */
    function nextGreatestLetter($letters, $target)
    {

        $low = 0;

        $high = count($letters) - 1;

        while ($low <= $high) {

            $mid = intval(($high + $low) / 2);

            $val = $letters[$mid];

            if ($val > $target) {

                if ($mid === 0 || $letters[$mid - 1] < $target) {

                    return $letters[$mid];

                } else {

                    $high = $mid - 1;

                }

            } else {

                $low = $mid + 1;

            }

        }


        return $letters[0];

    }
}


$model = new Solution();

var_dump($model->nextGreatestLetter(["c", "f", "j"], "a"));