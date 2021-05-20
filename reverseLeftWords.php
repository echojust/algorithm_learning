<?php

/**
 * 字符串的左旋转操作是把字符串前面的若干个字符转移到字符串的尾部。
 * 请定义一个函数实现字符串左旋转操作的功能。比如，输入字符串"abcdefg"和数字2，该函数将返回左旋转两位得到的结果"cdefgab"。
 * s = "abcdefg", k = 2 => "cdefgab"
 * @param String $s
 * @param Integer $n
 * @return String
 */
function reverseLeftWords($s, $n) {

    if(!$s){
        return  "";
    }

    $len = strlen(trim($s)) - 1;

    $right = "";

    $left = "";

    $max = $n - 1;

    for ($i = 0; $i <= $len; $i++){

        if($i <= $max){
            $right .= $s[$i];

        }else{
            $left .= $s[$i];
        }

    }

    return trim($left.$right);
}

$s = "abcdefg";
print_r(reverseLeftWords($s, 2));
