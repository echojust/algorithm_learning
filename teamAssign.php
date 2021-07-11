<?php


/**
 * 第三题
 * 我们公司⽻⽑球队开始招新了，计划招收 x⼈，每个⼈根据⽔平划分⾃⼰的级别 档位 1~8 级别 现计划按⼀下要求分成 2 个队伍（1 队、2 队）
 * 1）1 队的成员级别之和⼤于 2 队成员级别之和
 * 2）1 队的任意⼀名队员，如果分配他去到 2 队，1 队的成员级别之和就会严格 ⼩于 2 队成员级别之和
 * 3）每个队员必须要加⼊⼀个队伍 现在有多少⽅案可以完成上⾯分配
 * 例如招收 4⼈，⽔平级别分别：5 4 7 6 有⼏种分队⽅案
 * Class Solution
 */
class Solution
{

    private $result = [];

    /**
     * 第三题求所有可能的分配方案，解题思路还是采取回溯，枚举出所有可能解
     * @param $levels 级别数组
     * @param $total 总人数，题意上有此参数，实际根据级别数组可得出总人数
     * @return array
     */
    function teamAssign($levels, $total)
    {
        $this->backTrack($levels, 0, []);

        return $this->result;
    }


    function backTrack($levels, $step, $path)
    {
        //满足条件路径判断
        if($this->check($path, array_diff($levels, $path))){
            //去重
            sort($path);

            $second = array_diff($levels, $path);

            sort($second);
            if(!in_array([$path, $second], $this->result)){
                $this->result[] = [$path, $second];
            }
            return;
        }

        //中止
        if($step === count($levels)){
            return;
        }

        for ($i = 0; $i < count($levels); $i++){

            //去重
            if(in_array($levels[$i], $path)){
                continue;
            }
            //添加选择
            $path[] = $levels[$i];

            $this->backTrack($levels, $step + 1, $path);

            //回退选择
            array_pop($path);

        }

    }

    function check($first_team, $second_team)
    {
//        1：1 队的成员级别之和⼤于 2 队成员级别之和
//        2：1 队的任意⼀名队员，如果分配他去到 2 队，1 队的成员级别之和就会严格 ⼩于 2 队成员级别之和
//        每个队员必须要加⼊⼀个队伍
        //一队级别之和
        $first_team_sum = array_sum($first_team);
        //二队级别之和
        $second_team_sum = array_sum($second_team);

        //获取一队最低级别
        $first_min = min($first_team);

        return ($first_team_sum > $second_team_sum) && ($first_team_sum - $first_min < $second_team_sum + $first_min);

    }


}

//test
$model = new Solution();

var_dump($model->teamAssign([5,4,7,6,1], 5));