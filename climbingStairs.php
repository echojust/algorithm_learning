<?php

class Solution
{


    public $map = [];

    /**
     * 假设你正在爬楼梯。需要 n 阶你才能到达楼顶。
     * 每次你可以爬 1 或 2 个台阶。你有多少种不同的方法可以爬到楼顶呢？
     * 注意：给定 n 是一个正整数。
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n)
    {

        if ($n === 1 || $n === 0) {
            return 1;
        }

        if ($n === 2) {
            return 2;
        }

        if (!isset($this->map[$n - 1])) {
            $this->map[$n - 1] = $this->climbStairs($n - 1);

        }
        $first = $this->map[$n - 1];

        if (!isset($this->map[$n - 2])) {
            $this->map[$n - 2] = $this->climbStairs($n - 2);

        }

        $second = $this->map[$n - 2];

        return $first + $second;

    }
}
