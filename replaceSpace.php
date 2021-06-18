<?php
/**
 * 请实现一个函数，把字符串 s 中的每个空格替换成"%20"。
 * "We are happy." => "We%20are%20happy."
 * @param $s
 * @return string
 */
function replaceSpace($s) {

    $len = strlen($s) - 1;

    $string = "";

    for ($i = 0; $i <= $len; $i++){
        if($s[$i] == ' '){
            $string .= "%20";
        }else{
            $string .= $s[$i];
        }
    }

    return $string;

}

$s = "We are happy.";

print_r(replaceSpace($s));
