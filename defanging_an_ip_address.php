<?php
/**
 * 给你一个有效的 IPv4 地址 address，返回这个 IP 地址的无效化版本。所谓无效化 IP 地址，其实就是用 "[.]" 代替了每个 "."。
 * @param $address
 */
function defangIPaddr($address) {

    if(!$address){
        return "";
    }

    $len = strlen($address) - 1;

//    "1.1.1.1" => "1[.]1[.]1[.]1"
    $new_string = "";
    for ($i = 0; $i <= $len; $i++){

        if($address[$i] != '.'){
            $new_string .= $address[$i];
        }else{
            $new_string .= "[.]";
        }

    }

    return $new_string;

}

$address = "1.1.1.1";

print_r(defangIPaddr($address));