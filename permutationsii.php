<?php


class Solution {

    public $result = [];
    public $vis = [];
    /**
     * 给定一个可包含重复数字的序列 nums ，按任意顺序 返回所有不重复的全排列。
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permuteUnique($nums) {

        sort($nums);

        $this->backTrack($nums, 0, []);

        return $this->result;
    }


    function backTrack($nums, $step, $path) {

        if($step === count($nums)){

            $this->result[] = $path;

            return;
        }

        for ($i = 0; $i < count($nums); $i++){

            if($this->vis[$i] || ($i > 0 && $nums[$i] === $nums[$i - 1] && !$this->vis[$i - 1]))
                continue;


            $path[] = $nums[$i];

            $this->vis[$i] = true;

            $this->backTrack($nums, $step + 1, $path);

            $this->vis[$i] = false;

            array_pop($path);

        }



    }


}