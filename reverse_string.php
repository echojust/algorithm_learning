<?php
/**
 * Author: Huang
 * Date: 2021/4/30
 * Time: 13:55
 */
/**
 * 编写一个函数，其作用是将输入的字符串反转过来。输入字符串以字符数组 char[] 的形式给出。

不要给另外的数组分配额外的空间，你必须原地修改输入数组、使用 O(1) 的额外空间解决这一问题。

你可以假设数组中的所有字符都是 ASCII 码表中的可打印字符。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/reverse-string
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 * @param $s
 * @return array|mixed
 */
function reverse_string(&$s)
{

    $len = count($s);

    if(!$len){
        return [];
    }

    for ($i = $len - 1; $i > 0; $i--){

        $ex = $s[$i];

        if($len - 1 - $i > $i){
            break;
        }

        $s[$i] = $s[$len - 1 - $i];

        $s[$len - 1 - $i] = $ex;

    }

    return $s;

}

$s = ["h", "e", "l", "l", "o"];

print_r(reverse_string($s));