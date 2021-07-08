<?php


class Solution {


    private $result = [];

    /**
     * 给定一个不含重复数字的数组 nums ，返回其 所有可能的全排列 。你可以 按任意顺序 返回答案。
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permute($nums) {

        $this->backTrack($nums, 0, []);

        return $this->result;
    }


    function backTrack($nums, $step, $path) {

        if($step == count($nums)){

            $arr = $path;

            $this->result[] = $arr;

            return;
        }

        for ($i = 0; $i < count($nums); $i++){

            if(in_array($nums[$i], $path)){
                continue;
            }

            $path[] = $nums[$i];

            $this->backTrack($nums, $step + 1, $path);

            array_pop($path);
        }

    }
}
