<?php
/**
 * 珠玑妙算游戏（the game of master mind）的玩法如下。

计算机有4个槽，每个槽放一个球，颜色可能是红色（R）、黄色（Y）、绿色（G）或蓝色（B）。例如，计算机可能有RGGB 4种（槽1为红色，槽2、3为绿色，槽4为蓝色）。作为用户，你试图猜出颜色组合。打个比方，你可能会猜YRGB。要是猜对某个槽的颜色，则算一次“猜中”；要是只猜对颜色但槽位猜错了，则算一次“伪猜中”。注意，“猜中”不能算入“伪猜中”。

给定一种颜色组合solution和一个猜测guess，编写一个方法，返回猜中和伪猜中的次数answer，其中answer[0]为猜中的次数，answer[1]为伪猜中的次数。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/master-mind-lcci
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 * @param $solution
 * @param $guess
 * @return int[]
 */
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
