<?php

/**
 * 给你一个数字数组 arr 。

如果一个数列中，任意相邻两项的差总等于同一个常数，那么这个数列就称为 等差数列 。

如果可以重新排列数组形成等差数列，请返回 true ；否则，返回 false 。
来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/can-make-arithmetic-progression-from-sequence
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 * @param Integer[] $arr
 * @return Boolean
 */
function canMakeArithmeticProgression($arr) {

    $length = count($arr);

    //数组排序
    for ($i = 0; $i < $length; $i++){

        for ($j = $i + 1; $j < $length; $j++){

            if($arr[$i] > $arr[$j]){
                $tmp = $arr[$i];

                $arr[$i] = $arr[$j];

                $arr[$j] = $tmp;
            }

        }



    }

    for ($i = 0; $i < $length; $i++){

        if(!isset($arr[$i + 1]) || !isset($arr[$i + 2])){
            break;
        }

        if($arr[$i + 1] - $arr[$i] !== $arr[$i + 2] - $arr[$i + 1]){
            return false;
        }


    }

    return true;

}

$arr = [3, 5, 1];

print_r(canMakeArithmeticProgression($arr));
