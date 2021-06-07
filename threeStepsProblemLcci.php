<?php


class Solution
{
    public $map;

    /**
     * 三步问题。有个小孩正在上楼梯，楼梯有n阶台阶，小孩一次可以上1阶、2阶或3阶。实现一种方法，计算小孩有多少种上楼梯的方式。结果可能很大，你需要对结果模1000000007。

    来源：力扣（LeetCode）
    链接：https://leetcode-cn.com/problems/three-steps-problem-lcci
    著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
     * @param Integer $n
     * @return Integer
     */
    function waysToStep($n) {


        if($n == 1 || $n == 0){
            return 1;
        }

        if($n == 2){
            return 2;
        }

        if($n == 3){
            return 4;
        }

        if(isset($this->map[$n])){
            return $this->map[$n];
        }

        $first = $this->waysToStep($n - 3) % 1000000007;

        $second = $this->waysToStep($n - 2) % 1000000007;

        $third = $this->waysToStep($n - 1) % 1000000007;

        $this->map[$n] = ($first + $second + $third) % 1000000007;

        return $this->map[$n];
    }


}


