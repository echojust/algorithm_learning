<?php
    //归并排序
    function merge_sort($arr)
    {
        $len = count($arr);
        if ($len <= 1){
            return $arr;
        }
        $mid = intval($len / 2);

        $left = array_slice($arr, 0, $mid);

        $right = array_slice($arr, $mid);

        $left = merge_sort($left);

        $right = merge_sort($right);

        return merge_arr($left, $right);

    }

    function merge_arr($left, $right)
    {
        $result = [];

        while (count($left) && count($right)){

            $result[] = $left[0] <= $right[0] ? array_shift($left) : array_shift($right);
        }

        return array_merge($result, $left, $right);
    }


    $arr = range(1,20);
    shuffle($arr);

    echo "before sort:",implode(',', $arr),"\n";
    $startTime = microtime(1);
    $arr = merge_sort($arr);
    $endTime = microtime(1);
    echo "after sort:",implode(',', $arr),"\n";
    echo "用时：".($endTime - $startTime);



