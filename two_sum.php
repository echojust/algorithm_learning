<?php
/**
 * Author: Huang
 * Date: 2021/4/30
 * Time: 11:14
 */

/**
 * 给定一个整数数组 nums 和一个整数目标值 target，请你在该数组中找出 和为目标值 的那 两个 整数，并返回它们的数组下标。
 *
 * 你可以假设每种输入只会对应一个答案。但是，数组中同一个元素在答案里不能重复出现。
 *
 * 你可以按任意顺序返回答案。
 *
 * 来源：力扣（LeetCode）
 * 链接：https://leetcode-cn.com/problems/two-sum
 * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 */

function two_sum($nums, $target)
{

//    foreach ($nums as $k => $num) {
//
//        $diff = $target - $num;
//
//        if (!in_array($diff, $nums)) {
//            continue;
//        }
//
//        foreach ($nums as $kk => $vv){
//            if($kk == $k || $vv != $diff){
//                continue;
//            }
//
//            return [$k, $kk];
//        }
//
//    }



    $diff_arr = [];


    foreach ($nums as $k => $v){

        if(!isset($diff_arr[$target - $v])){
            $diff_arr[$target - $v] = $k;
        }

        if(isset($diff_arr[$v]) && $diff_arr[$v] != $k){
            return [$k, $diff_arr[$v]];
        }

    }


}

//$nums = [3, 3];
//$nums = [3, 2, 4];
$nums = [0, 4, 3, 0];
$target = 0;

$result = two_sum($nums, $target);

print_r($result);