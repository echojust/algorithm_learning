<?php

/**
 * 4.有一整型构成的集合S，请查找出所有4个数字的和等于给定值n的组合。例如，给定集合 S = [0, 1, -1, 0, 2, -2], n = 0

结果为：
[
[-1,  0, 0, 1],
[-2, -1, 1, 2],
[-2,  0, 0, 2]
]
 * 根据题意，采用回溯思路解决
 */
class Solution
{

    private $result = [];

    function getResult($s, $n)
    {

        if(count($s) < 4){
            return [];
        }
        sort($s);
        $this->backTrack($s, $n, 0, []);

        return $this->result;

    }

    function backTrack($s, $n, $step, $path)
    {

        if(array_sum($path) === $n && count($path) === 4){

            sort($path);

            if(!in_array($path, $this->result)){
                $this->result[] = $path;
            }

            return;

        }

        if(count($path) === 4){
            return;
        }

        for ($i = $step; $i < count($s); $i++){

            if(count($path) > 4){
                break;
            }
            //非首位且与前位数字相同直接跳过
            if ($i > $step && $s[$i] == $s[$i - 1]) {

                continue;
            }
            $path[] = $s[$i];


            $this->backTrack($s, $n, $i + 1, $path);

            array_pop($path);
        }


    }



}

//test
$s = [0, 1, -1, 0, 2, -2];
$n = 0;


$model = new Solution();

var_dump($model->getResult($s, $n));