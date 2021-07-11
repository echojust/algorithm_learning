<?php


class Solution
{
    public $result = [];
    /**
     * 给定一个无重复元素的数组 candidates 和一个目标数 target ，找出 candidates 中所有可以使数字和为 target 的组合。
     * candidates 中的数字可以无限制重复被选取。
     * @param Integer[] $candidates
     * @param Integer $target
     * @return Integer[][]
     */
    function combinationSum($candidates, $target)
    {
        $this->backTrack($candidates, $target, 0, []);

        return $this->result;
    }


    function backTrack($candidates, $left, $step, $path)
    {
        if($left === 0){

            $this->result[] = $path;

            return;
        }

        if($step === count($candidates)){
            return;
        }

        for ($i = 0; $i <= intval($left / $candidates[$step]); $i++){

            for ($j = 0; $j < $i; $j++){

                $path[] = $candidates[$step];

            }

            $this->backTrack($candidates, $left - $i * $candidates[$step], $step + 1, $path);

            for ($j = 0; $j < $i; $j++){

                array_pop($path);
            }

        }


    }
}
