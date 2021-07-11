<?php


class Solution
{

    private $result = [];

    /**
     * 给你一个整数数组 nums ，数组中的元素 互不相同 。返回该数组所有可能的子集（幂集）。
     * 解集 不能 包含重复的子集。你可以按 任意顺序 返回解集。
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function subsets($nums) {

        $this->backTrack($nums, 0, []);

        return $this->result;
    }

    function backTrack($nums, $step, $path)
    {

        if($step === count($nums)){

            $this->result[] = $path;

            return;
        }



        $this->backTrack($nums, $step + 1, $path);

        $path[] = $nums[$step];

        $this->backTrack($nums, $step + 1, $path);

        unset($path[count($path) - 1]);




    }
}

$model = new Solution();

var_dump($model->subsets([1, 2, 3]));