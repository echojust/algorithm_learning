<?php



/**
 * @param Float $x
 * @param Integer $n
 * @return Float
 */
function myPow($x, $n) {

    if($n === 1){
        return $x;
    }

    if($n === 0){
        return 1;
    }

    if($n > 0){

        return getValByHalf($x, $n);

    }else{
        //此处主要注意题目限制：-2^31 <= n <= 2^31-1,若N为最小值-2^31时，如果直接处理会出现数据溢出情况
        return 1 / (getValByHalf($x, -1 * $n + 1) * (1 / $x));
//        return 1 / getValByHalf($x, -1 * $n);
    }





}

function getValByHalf($x, $n)
{
    if($n === 0){
        return 1;
    }

    $half_val = getValByHalf($x, intval($n / 2));

    if($n % 2){
        //$n为奇数，则需要再次乘$x
        return $half_val * $half_val * $x;
    }else{
        return $half_val * $half_val;
    }


}


$x = 2;

$n = -2;

print_r(myPow($x, $n));
