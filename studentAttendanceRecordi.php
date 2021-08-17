<?php

class Solution
{

    /**
     * 给你一个字符串 s 表示一个学生的出勤记录，其中的每个字符用来标记当天的出勤情况（缺勤、迟到、到场）。记录中只含下面三种字符：
     *
     * 'A'：Absent，缺勤
     * 'L'：Late，迟到
     * 'P'：Present，到场
     * 如果学生能够 同时 满足下面两个条件，则可以获得出勤奖励：
     *
     * 按 总出勤 计，学生缺勤（'A'）严格 少于两天。
     * 学生 不会 存在 连续 3 天或 3 天以上的迟到（'L'）记录。
     * 如果学生可以获得出勤奖励，返回 true ；否则，返回 false 。
     * 来源：力扣（LeetCode）
     * 链接：https://leetcode-cn.com/problems/student-attendance-record-i
     * 著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
     * @param String $s
     * @return Boolean
     */
    function checkRecord($s)
    {

        $len = strlen($s);

        //缺勤次数
        $a_nums = 0;
        //连续迟到次数;
        $l_nums = 0;

        $is_rewards = true;

        for($i = 0; $i < $len; $i++){

            if($s[$i] === 'A'){
                $a_nums++;
            }

            if($a_nums >= 2){

                $is_rewards = false;
                break;
            }

            if($s[$i] !== 'L'){
                $l_nums = 0;
            }else{
                $l_nums++;
            }

            if($l_nums >= 3){

                $is_rewards = false;

                break;
            }


        }
        return $is_rewards;

    }
}
