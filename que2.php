<?php

class Solution
{
    /**
     * 2.回文数是指正读倒读都一样的整数，例如121, 1221等。请设计程序，找出100000以内的回文素数（指既是回文数，又是素（质）数）。
     */
    function getResult($max = 100000)
    {

        $result = [];

        for ($i = 0; $i <= $max; $i++){

            if($this->isPalindrome($i) && $this->isPrime($i)){

                $result[] = $i;
            }

        }

        return $result;
    }

    /**
     * 判断是否为回文数
     * @param $x
     * @return bool
     */
    function isPalindrome($x)
    {
        if($x >= 0 && $x < 10){
            return true;
        }

        if(!$x || ($x%10 == 0 && $x != 0)){
            return false;
        }

        //反转倒序值
        $reverse = 0;

        while ($x > $reverse){

            $reverse = $reverse * 10 + $x % 10;

            $x = intval($x / 10);

        }

        return $reverse == $x || $x == intval($reverse / 10);
    }

    /**
     * 判断是否为素数
     * @param $x
     * @return bool
     */
    function isPrime($x)
    {
        //素数即为只能被1和其自身整除的数
        $flag = true;

        for ($i = 2; $i <= $x / 2; $i++){

            if($x % $i === 0){

                $flag = false;

                break;
            }
        }

        return $flag;


    }



}

//test
$model = new Solution();

var_dump($model->getResult());
