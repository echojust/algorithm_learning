<?php

class Solution
{

    public $result = [];

    /**
     * 给你一个整数数组 nums ，其中可能包含重复元素，请你返回该数组所有可能的子集（幂集）。
     *
     * 解集 不能 包含重复的子集。返回的解集中，子集可以按 任意顺序 排列。
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function subsetsWithDup($nums)
    {
        sort($nums);
        $this->backTrack($nums, 0, []);

        return $this->result;
    }


    function backTrack($nums, $step, $path, $is_choose_pre = false)
    {

        if($step === count($nums)){

            $this->result[] = $path;

            return;

        }

        $this->backTrack($nums, $step + 1, $path);

        if(!$is_choose_pre && $step > 0 && $nums[$step] == $nums[$step - 1]){
            return;
        }

        $path[] = $nums[$step];

        $this->backTrack($nums, $step + 1, $path, true);

        unset($path[count($path) - 1]);


    }

}

$model = new Solution();

var_dump($model->subsetsWithDup([1, 2, 2]));
