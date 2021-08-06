<?php

/**
 * 3.实现函数，判断一个字符串是不是另外一个字符串的“变形”（包含的字符及每个字符数量相同，仅排列不同）。例如：
"good"
"dogo"
应返回true,
"car"
"cdr"
应返回false.
 */
class Solution
{
    function checkWord($a, $b)
    {
        //长度不同，肯定为false
        if(strlen($a) !== strlen($b)){
            return false;
        }
        $a = str_split($a);
        $b = str_split($b);
        //两个字符串统一排序，此处为体现题意考察，采用冒泡排序，否则可以数组函数排序
        $a = $this->doSort($a);
        $b = $this->doSort($b);

        if($a === $b){
            return true;
        }

        return false;

    }

    function doSort($arr)
    {
        $len = count($arr);

        if($len <= 1){
            return $arr;
        }

        for ($i = 0; $i < $len; $i++){

            for ($j = $i + 1; $j < $len; $j++){

                if($arr[$i] > $arr[$j]){
                    $tmp = $arr[$i];
                    $arr[$i] = $arr[$j];
                    $arr[$j] = $tmp;
                }

            }

        }

        return $arr;

    }


}

//test
$a = "good";
$b = "odgo";
$model = new Solution();
var_dump($model->checkWord($a, $b));