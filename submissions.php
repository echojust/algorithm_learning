<?php


/**
 * The API guess is defined in the parent class.
 * @param num   your guess
 * @return         -1 if num is lower than the guess number
 *                  1 if num is higher than the guess number
 *               otherwise return 0
 * public function guess($num){}
 */

class Solution extends GuessGame
{
    /**
     * 猜数字游戏的规则如下：
     *
     * 每轮游戏，我都会从 1 到 n 随机选择一个数字。 请你猜选出的是哪个数字。
     * 如果你猜错了，我会告诉你，你猜测的数字比我选出的数字是大了还是小了。
     * 你可以通过调用一个预先定义好的接口 int guess(int num) 来获取猜测结果，返回值一共有 3 种可能的情况（-1，1 或 0）：
     * -1：我选出的数字比你猜的数字小 pick < num
     * 1：我选出的数字比你猜的数字大 pick > num
     * 0：我选出的数字和你猜的数字一样。恭喜！你猜对了！pick == num
     * 返回我选出的数字。
     * @param Integer $n
     * @return Integer
     */
    function guessNumber($n)
    {

        $pick = 1;

        $re = $this->guess($pick);

        if ($re === 0) {
            return $pick;
        }

        $re = $this->guess($n);

        if ($re === 0) {
            return $n;
        }

        while ($re !== 0) {

            $mid = intval(($n + $pick) / 2);

            $re = $this->guess($mid);

            if ($re === 1) {

                $pick = $mid;

            } else {

                $n = $mid;

            }


        }

        return $mid;

    }
}