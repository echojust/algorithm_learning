<?php

/**
 * 给定两个字符串 s 和 t ，编写一个函数来判断 t 是否是 s 的字母异位词。
 * @param String $s
 * @param String $t
 * @return Boolean
 */
function isAnagram($s, $t) {

    $arr = [];

    $s_len = strlen($s);

    $t_len = strlen($t);

    if($s_len !== $t_len){
        return false;
    }

    for ($i = 0; $i < $s_len; $i++){

        if(isset($arr[$s[$i]])){
            $arr[$s[$i]]++;
        }else{
            $arr[$s[$i]] = 1;
        }


    }



    for ($i = 0; $i < $t_len; $i++){

        if(!isset($arr[$t[$i]])){
            return false;
        }else{
            $arr[$t[$i]]--;
        }
    }

    foreach ($arr as $v){

        if($v != 0){
            return false;
        }

    }


    return true;

}
