<?php

/**
 * 编写一种算法，若M × N矩阵中某个元素为0，则将其所在的行与列清零。
 * @param $matrix
 * @return array
 */
function setZeroes(&$matrix) {

    $rows = $cols = [];

    foreach ($matrix as $k => $v){

        foreach ($v as $kk => $vv){

            if($vv == 0){

                $cols[] = $k;

                $rows[] = $kk;
            }


        }

    }


    foreach ($matrix as $k => &$v){

        foreach ($v as $kk => &$vv){

            if(in_array($k, $cols) || in_array($kk, $rows)){
                $vv = 0;
                continue;
            }

        }

    }

    return $matrix;
}

//$arr = [
//    [1,1,1],
//    [1,0,1],
//    [1,1,1]
//];
$arr = [
    [0,1,2,0],
    [3,4,5,2],
    [1,3,1,5]
];


print_r(setZeroes($arr));
