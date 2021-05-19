<?php
/**
 * 给定一个字符串，验证它是否是回文串，只考虑字母和数字字符，可以忽略字母的大小写。说明：本题中，我们将空字符串定义为有效的回文串。
 * @param $s
 */
function isPalindrome($s) {

    if(!$s){
        return true;
    }
    $s = trim($s);

    $len = strlen($s);

    $start = 0;

    $end = $len - 1;
//    "A man, a plan, a canal: Panama"

    while ($start <= $end){

        if($s[$start] === ' ' || !ctype_alnum($s[$start])){
            $start++;
            continue;
        }

        if(!$s[$end] === ' ' || !ctype_alnum($s[$end])){
            $end--;
            continue;
        }

        if(strtolower($s[$start]) !== strtolower($s[$end])){

            return false;
        }

        $start++;
        $end--;

    }

    return true;

}

$s = "A man, a plan, a canal: Panama";
$s = "0P";
print_r(isPalindrome($s));