<?php

/**
 * 设计一个算法，判断玩家是否赢了井字游戏。输入是一个 N x N 的数组棋盘，由字符" "，"X"和"O"组成，其中字符" "代表一个空位。

以下是井字游戏的规则：

玩家轮流将字符放入空位（" "）中。
第一个玩家总是放字符"O"，且第二个玩家总是放字符"X"。
"X"和"O"只允许放置在空位中，不允许对已放有字符的位置进行填充。
当有N个相同（且非空）的字符填充任何行、列或对角线时，游戏结束，对应该字符的玩家获胜。
当所有位置非空时，也算为游戏结束。
如果游戏结束，玩家不允许再放置字符。
如果游戏存在获胜者，就返回该游戏的获胜者使用的字符（"X"或"O"）；如果游戏以平局结束，则返回 "Draw"；如果仍会有行动（游戏未结束），则返回 "Pending"。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/tic-tac-toe-lcci
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 * @param $board
 */
function tictactoe($board) {

    //题目强制矩阵为N*N
    $count = count($board);

    //是否胜利
    $is_victory = false;

    //判断行是否有胜利
    for ($i = 0; $i < $count; $i++){

        if($board[$i][0] == ' '){
            continue;
        }

        for ($j = 1; $j < $count; $j++){

            //标记胜利
            $is_victory = true;

            if($board[$i][$j] != $board[$i][0]){
                $is_victory = false;
                break;
            }

        }

        if($is_victory){
            return $board[$i][0];
        }

    }

    //判断列是否胜利
    for ($i = 0; $i < $count; $i++){

        if($board[0][$i] == ' '){
            continue;
        }

        for ($j = 1; $j < $count; $j++){

            //标记胜利
            $is_victory = true;

            if($board[$j][$i] != $board[0][$i]){
                 $is_victory = false;
                 break;
            }
        }

        if($is_victory){
            return $board[0][$i];
        }



    }

    //判断左对角线是否胜利
    if($board[0][0] != ' '){

        $is_victory = true;
        $i = $j = 0;
        while ($i < $count && $j < $count){

            if($board[$i][$j] != $board[0][0]){
                $is_victory = false;
                break;
            }

            $i++;
            $j++;
        }

        if($is_victory){
            return $board[0][0];
        }


    }

    //判断右对角线是否胜利
    if($board[0][$count - 1] != ' '){

        $is_victory = true;

        $i = 0;

        $j = $count - 1;

        while ($j >= 0){

            if($board[$i][$j] != $board[0][$count - 1]){
                $is_victory = false;
                break;
            }

            $i++;
            $j--;

        }

        if($is_victory){
            return $board[0][$count - 1];
        }
    }

    //判断是否平局，无人胜利时，无空格为平局返回“Draw”，否则返回“Pending”
    for ($i = 0; $i < $count; $i++){

        for ($j = 0; $j < $count; $j++){
//            var_dump($board[$i][$j]);die();
            if($board[$i][$j] == ' '){
                return "Pending";
            }

        }

    }

    return "Draw";
}

$board = [" OOO","    ","OXXX","XX O"];

print_r(tictactoe($board));