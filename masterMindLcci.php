<?php

function masterMind($solution, $guess) {

    $result = [0, 0];

    $done = [];

    for ($i = 0; $i < 4; $i++){

        $sol = $solution[$i];

        $gue = $guess[$i];

        if($sol == $gue){

            $result[0]++;

        }else{

            //插入已判定数组
            if(!isset($done[$sol])){
                //尚为纳入，则标记1次
                $done[$sol] = 1;

            }else{
                //猜测结果中已纳入，则伪猜中加1
                $done[$sol]++;
                if($done[$sol] <= 0){
                    $result[1]++;
                }

            }

            if(!isset($done[$gue])){
                //标记猜测结果
                $done[$gue] = -1;

            }else{
                //避免重复计算
                $done[$gue]--;
                if($done[$gue] >= 0){
                    $result[1]++;
                }
            }


        }
    }

    return $result;

}

$solution = "RGBY";
$guess = "GGRR";

var_dump(masterMind($solution, $guess));
