<?php
/**
 * Author: Huang
 * Date: 2021/4/30
 * Time: 14:37
 */
//输入一个英文句子，翻转句子中单词的顺序，但单词内字符的顺序不变。为简单起见，标点符号和普通字母一样处理。例如输入字符串"I am a student. "，则输出"student. a am I"。
//
//来源：力扣（LeetCode）
//链接：https://leetcode-cn.com/problems/fan-zhuan-dan-ci-shun-xu-lcof
//著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
function reverse_words($string)
{
//    $arr = array_filter(explode(' ', $string));
//
//    return implode(' ', array_reverse($arr));

    $arr = explode(' ', trim($string));
//    var_dump($arr);die();
    $len = count($arr);

    $result = [];

    for ($i = $len - 1; $i >= 0; $i--){
        if(!$arr[$i]){
            continue;
        }
        $result[] = $arr[$i];
    }

    return implode(' ', $result);
}

$string = "  hello world!  ";
$string = "the sky is blue";
$string = "a good   example";
print_r(reverse_words($string));