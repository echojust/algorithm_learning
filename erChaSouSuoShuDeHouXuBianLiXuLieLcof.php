<?php

class Solution {

    public $valid = true;

    /**
     * 输入一个整数数组，判断该数组是不是某二叉搜索树的后序遍历结果。
     * 如果是则返回 true，否则返回 false。
     * 假设输入的数组的任意两个数字都互不相同。
     * @param Integer[] $postorder
     * @return Boolean
     */
    function verifyPostorder($postorder) {

        $this->check($postorder, 0, count($postorder) - 1);

        return $this->valid;

    }


    function check($postorder, $i, $j)
    {

        if(!$this->valid || $i >= $j){
            return;
        }

        $k = $i;

        while ($k < $j && $postorder[$k] < $postorder[$j]){
            //左右子树区隔点
            $k++;
        }

        //判断是否均大于根节点
        $p = $k;
        while ($p < $j){

            if($postorder[$p] <= $postorder[$j]){
                $this->valid = false;
                break;
            }

            $p++;

        }

        if(!$this->valid){
            return;
        }

        //处理左子树
        $this->check($postorder, $i, $k - 1);

        $this->check($postorder, $k, $j - 1);


    }
}
