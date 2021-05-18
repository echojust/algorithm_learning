<?php
/**
 * Author: Huang
 * Date: 2021/5/13
 * Time: 13:39
 */
//给你一个字符串 s，由若干单词组成，单词之间用空格隔开。返回字符串中最后一个单词的长度。如果不存在最后一个单词，请返回 0 。
//
//单词 是指仅由字母组成、不包含任何空格字符的最大子字符串。
//
//来源：力扣（LeetCode）


function lengthOfLastWord($s)
{
    if(!$s){
        return 0;
    }

    $len = strlen($s) - 1;

    $end_len = 0;

    for ($i = $len; $i >= 0; $i--){

        if($s[$i] != ' '){
            $end_len++;
        }

        if($s[$i] == ' ' && $end_len >0 ){
            return $end_len;
        }

    }
    return $end_len;

}

//$s = " dadas darweq qweqwd xczxcafas ewerrtff cxzczczxczzcczx    ";
$s = "a";
$end_len = lengthOfLastWord($s);

print_r($end_len);