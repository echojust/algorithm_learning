<?php
/**
 * 你正在使用一堆木板建造跳水板。有两种类型的木板，其中长度较短的木板长度为shorter，长度较长的木板长度为longer。你必须正好使用k块木板。编写一个方法，生成跳水板所有可能的长度。
返回的长度需要从小到大排列。
来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/diving-board-lcci
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 * @param $shorter
 * @param $longer
 * @param $k
 * @return array|float[]|int[]
 */
function divingBoard($shorter, $longer, $k) {

    if($k == 0){
        return [];
    }

    if($shorter == $longer){
        return [$shorter * $k];
    }

    $result = [];

    for ($i = 0; $i <= $k; $i++){

        $result[] = $longer * $i + $shorter * ($k - $i);

    }

    return $result;

}


$shorter = 1;
$longer = 2;
$k = 3;

$shorter = 1;
$longer = 1;
$k = 0;

print_r(divingBoard($shorter, $longer, $k));
