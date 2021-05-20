<?php
/**
 * 给你一个有序数组 nums ，请你 原地 删除重复出现的元素，使每个元素 只出现一次 ，返回删除后数组的新长度。
    不要使用额外的数组空间，你必须在 原地 修改输入数组 并在使用 O(1) 额外空间的条件下完成。
    来源：力扣（LeetCode）
    链接：https://leetcode-cn.com/problems/remove-duplicates-from-sorted-array
    著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 * @param $nums
 * @return int
 */
function removeDuplicates(&$nums) {

    if(!$nums || !is_array($nums)){
        return 0;
    }

    $len = count($nums) - 1;

    for ($i = 0; $i <= $len; $i++){

        $j = $i + 1;

        if($j > $len)
            break;

        if(!isset($nums[$i])){
            continue;
        }


        if($nums[$i] == $nums[$j]){
            unset($nums[$i]);
        }


    }
    return count($nums);



}

function removeDuplicates1(&$nums) {
    if(!$nums || !is_array($nums)){
        return 0;
    }

    $len = count($nums) - 1;

    $fast = $slow = 1;

    while ($fast <= $len){

        if($nums[$fast] != $nums[$fast - 1]){
            $nums[$slow] = $nums[$fast];
            $slow++;
        }

        $fast++;
    }
    return $slow;
}

$arr = [0,0,1,1,1,2,2,3,3,4];

print_r(removeDuplicates1($arr));
print_r($arr);
