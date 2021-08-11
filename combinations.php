<?php

class Solution {


    public $result = [];
    /**
     * 给定两个整数 n 和 k，返回 1 ... n 中所有可能的 k 个数的组合。
     * @param Integer $n
     * @param Integer $k
     * @return Integer[][]
     */
    function combine($n, $k) {

        if(!$n || !$k){
            return [];
        }

        $this->backTrack($n, $k, 1, []);

        return $this->result;

    }

    function backTrack($n, $k, $step, $path)
    {

        if(count($path) === $k){

            $this->result[] = $path;

            return;

        }
        if($step === $n + 1)
            return;

        //$step不放入解集$path情况
        $this->backTrack ($n, $k, $step + 1, $path);

        //$step放入解集$path情况
        $path[] = $step;

        $this->backTrack($n, $k, $step + 1, $path);

        //还原
        array_pop($path);
    }
}

$model = new Solution();

var_dump($model->combine(4, 2));
