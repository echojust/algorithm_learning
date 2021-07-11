<?php

class TreeNode
{
    public $val = null;
    public $left = null;
    public $right = null;

    function __construct($val = 0, $left = null, $right = null)
    {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

class Solution
{

    /**
     * 返回与给定的前序和后序遍历匹配的任何二叉树。
     * pre 和 post 遍历中的值是不同的正整数。
     * @param Integer[] $pre
     * @param Integer[] $post
     * @return TreeNode
     */
    function constructFromPrePost($pre, $post)
    {
        if($pre === [] || $post === []){

            return null;
        }

        $root = $this->buildMyTree($pre, 0, count($pre) - 1, $post, 0, count($post) - 1);

        return $root;

    }


    function buildMyTree($pre, $p, $q, $post, $i, $j)
    {

        if($p > $q){
            return null;
        }

        $root = new TreeNode($pre[$p]);

        if($p == $q){
            return $root;
        }

        $k = $i;

        while ($k <= $j && $pre[$p + 1] != $post[$k]){
            $k++;
        }
        //后序遍历，根据左子树节点位置确定子树节点个数
        $leftSize = $k - $i + 1;


        $leftNode = $this->buildMyTree($pre, $p + 1, $p + $leftSize, $post, $i, $leftSize - 1 + $i);

        $rightNode = $this->buildMyTree($pre, $leftSize + $p + 1, $q, $post, $leftSize + $i, $j - 1);

        $root->left = $leftNode;
        $root->right = $rightNode;

        return $root;

    }
}