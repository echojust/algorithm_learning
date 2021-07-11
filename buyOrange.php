<?php

/**
 * 第一题
 * ⼩⽩去附近店铺买橘⼦，⽬前商店做活动，提供捆绑打包销售，例如每袋 3 个和 每袋 5 个的形式出售。
 * 现⼩⽩只想购买 n 个橘⼦，同时想购买尽量少的袋数⽅ 便携带。
 * 如果不能购买恰好 n 个橘⼦，就不会购买（可返回-1），求解输出最少 的袋数。（例如：18）
 * Class Solution
 */
class Solution
{
    //记录袋子个数
    private $sum = 0;
    //记录所有组合
//    private $result = [];
    /**
     * 思路：题目实际可转化为i*3 + j*5 = $n,要求$i + $j值最小，且不能满足时返回-1
     * 采用回溯枚举的方法找出所有可能的组合及记录最小袋子总数
     * @param $n
     */
    function buy($n)
    {
        //根据题目，可供选择方案总体转化为【5，3】
        $nums = [5, 3];

        $this->backTrack($nums, $n, 0, []);

//        if(empty($this->result)){
//            return -1;
//        }
//
//        return $this->result;

        if (!$this->sum) {
            return -1;
        }

        return $this->sum;
    }

    /**
     * @param $nums 可供选择【5，3】
     * @param $total 总个数
     * @param $step 阶段
     * @param $path 路径
     */
    function backTrack($nums, $total, $step, $path)
    {
        if ($total === 0) {

//            $this->result[] = $path;

            $sum = count($path);

            if ($this->sum == 0) {
                $this->sum = $sum;
            }

            if ($this->sum > $sum) {
                $this->sum = $sum;
            }

            return;

        }


        if ($step === count($nums)) {

            return;

        }

        for ($i = 0; $i <= intval($total / $nums[$step]); $i++) {


            for ($j = 0; $j < $i; $j++) {
                //记录可能组合个数
                $path[] = $nums[$step];

            }

            $this->backTrack($nums, $total - $i * $nums[$step], $step + 1, $path);

            //撤销选择
            for ($j = 0; $j < $i; $j++) {

                array_pop($path);
            }
        }

    }


}


//test
$model = new Solution();

var_dump($model->buy(14));

