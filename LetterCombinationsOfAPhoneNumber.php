<?php

class Solution
{
    public $result = [];
    /**
     * 给定一个仅包含数字2-9的字符串，返回所有它能表示的字母组合。答案可以按 任意顺序 返回。
     * 给出数字到字母的映射如下（与电话按键相同）。注意 1 不对应任何字母。
     * @param String $digits
     * @return String[]
     */
    function letterCombinations($digits)
    {

        if(!$digits){
            return [];
        }

        $all_chart = [
            '2' => 'abc',
            '3' => 'def',
            '4' => 'ghi',
            '5' => 'jkl',
            '6' => 'mno',
            '7' => 'pqrs',
            '8' => 'tuv',
            '9' => 'wxyz'
        ];

        $this->backTrack($all_chart, $digits, 0, []);

        return $this->result;

    }

    function backTrack($all_chart, $digits, $k, $path)
    {
        if($k == strlen($digits)){

            $this->result[] = implode('', $path);

            return;
        }
        $dig = $digits[$k];

        $len = strlen($all_chart[$dig]);

        for ($i = 0; $i < $len; $i++){

            $path[$k] = $all_chart[$dig][$i];

            $this->backTrack($all_chart, $digits, $k + 1, $path);
        }


    }
}
