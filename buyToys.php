<?php


/**
 * 第二题
 * ⼩红去超时买玩具，⼝袋怀揣了 n 张钱，买了⼀个价值 m 的玩具。
 * 钱的⾯额可 以是 1 元、5 元、10 元、50 元，⽽⼩红拥有的钱中有的⾯额可能没有，问，付 钱的时候，会有多少种可能的付费组合⽅式？
 * 输⼊：输⼊两个数 n（多少张钱），m（玩具的价格） 输出：请输出可能的组合⽅式数；
 * Class Solution
 */
class Solution
{
    private $result = [];

    /**
     * 第二题思考方式与第一题类似，根据题目转化为1*a + 5*b + 10*c + 50*d = $m;且a+b+c+d = $n;a,b,c,d均可为0;
     * 题目未标明是否“可找零”，本题解题思路默认与第一题相同，默认钱数正好。
     * @param $m 玩具价格
     * @param $n 钱的张数
     * @return array
     */
    function buyToys($m, $n)
    {

        //根据题意，可供选择方案转化为【1， 5， 10， 50】
        $nums = [50, 10, 5, 1];

        $this->backTrack($nums, $m, $n, 0, []);

        return $this->result;

    }


    function backTrack($nums, $total, $money_num, $step, $path)
    {
        //满足条件的路径判断条件，钱已经足够且钱张数未超出
        if($total === 0 && $money_num >= 0){

            $this->result[] = $path;

            return;
        }
        //中止条件
        if($step === count($nums) || count($path) >= $money_num){

            return;

        }

        for ($i = 0; $i <= intval($total / $nums[$step]); $i++){

            if($i > $money_num){
                break;
            }

            for ($j = 0; $j < $i; $j++){
                $path[] = $nums[$step];
            }

            $this->backTrack($nums, $total - $i * $nums[$step], $money_num - count($path), $step + 1, $path);

            for ($j = 0; $j < $i; $j++){
                array_pop($path);
            }

        }
    }


}

//test
$model = new Solution();

var_dump($model->buyToys(1020, 88));