<?php


function oneEditAway($first, $second) {

    if((!$first && !$second) || $first == $second){
        return true;
    }

    $f_len = strlen($first);

    $s_len = strlen($second);

    //字符串长度相差大于等于2，返回false
    if(abs($f_len - $s_len) >= 2){
        return false;
    }

    $is_one_edit = false;

    if($f_len == $s_len){
        //两个字符串长度相同时
        for ($i = 0; $i <= $f_len - 1; $i++){
            //同位置字符不同
            if ($first[$i] != $second[$i]){

                if($is_one_edit){
                    //非第一次不同，直接返回false
                    return false;
                }else{
                    //第一次不同，标记true
                    $is_one_edit = true;
                }

            }

        }


    }else{

        // first = "pales"  second = "ales"
        // first = "pales"  second = "ples"
        // first = "ples"  second = "pales"

        $first_arr = $first ? str_split($first) : [];
        $second_arr = $second ? str_split($second) : [];

        $slow = 0;

        if($f_len > $s_len){

            for ($fast = 0; $fast <= $f_len - 1; $fast++){

                if($first_arr[$fast] != $second[$slow]){

                    if($is_one_edit){

                        return false;

                    }else{

                        $is_one_edit = true;
                        continue;
                    }
                }else{
                    $slow++;
                }


            }

        }else{
            var_dump($first_arr, $second_arr);
            for ($fast = 0; $fast <= $s_len - 1; $fast++){

                if($second[$fast] != $first_arr[$slow]){

                    if($is_one_edit){

                        return false;

                    }else{

                        $is_one_edit = true;
                        continue;
                    }
                }else{
                    $slow++;
                }


            }
        }


    }
    return $is_one_edit;

}
//"dinitrophenylhydrazine"
//"acetylphenylhydrazine"
//$first = "dinitrophenylhydrazine";

//$second = "acetylphenylhydrazine";
$first = "teacher";
$second = "treacher";
var_dump(oneEditAway($first, $second));