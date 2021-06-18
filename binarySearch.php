<?php

/**
 * 给定一个n个元素有序的（升序）整型数组 nums 和一个目标值 target  ，写一个函数搜索 nums 中的 target，如果目标值存在返回下标，否则返回 -1。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/binary-search
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 * @param Integer[] $nums
 * @param Integer $target
 * @return Integer
 */
function search($nums, $target) {

    $length = count($nums);

    $low = 0;

    $high = $length - 1;

    while ($low <= $high){

        $mid = intval(($low + $high) / 2);

        if($nums[$mid] == $target){
            return $mid;
        }

        if($nums[$mid] > $target){

            $high = $mid - 1;

        }else{

            $low = $mid + 1;

        }

    }

    return -1;

}

$nums = [-1,0,3,5,9,12];

$target = 10;

print_r(search($nums, $target));
