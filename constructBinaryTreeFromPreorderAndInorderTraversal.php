<?php

class TreeNode {
    public $val = null;
    public $left = null;
    public $right = null;
    function __construct($val = 0, $left = null, $right = null) {
        $this->val = $val;
        $this->left = $left;
        $this->right = $right;
    }
}

class Solution {

    /**
     * @param Integer[] $preorder
     * @param Integer[] $inorder
     * @return TreeNode
     */
    function buildTree($preorder, $inorder) {

        if($preorder === [] || $inorder === []){
            return null;
        }

        $root = $this->buildMyTree($preorder, 0, count($preorder) - 1, $inorder, 0, count($inorder) - 1);

        return $root;


    }


    function buildMyTree($preorder, $q, $p, $inorder, $i, $j)
    {

        if($i > $j){
            return null;
        }

        //新建根节点
        $root = new TreeNode($preorder[$q]);

        $k = $i;
        //确定中序遍历中根节点位置
        while ($k <= $j && $preorder[$q] !== $inorder[$k]){
            $k++;
        }

        //中序遍历根节点左侧皆为左子树，右侧皆为右子树
        $leftSize = $k - $i;


        //处理左子树
        $leftNode = $this->buildMyTree($preorder, $q + 1, $q + $leftSize, $inorder, $i, $k - 1);

        //处理右子树
        $rightNode = $this->buildMyTree($preorder, $q + $leftSize + 1, $p, $inorder, $k + 1, $j);


        $root->left = $leftNode;

        $root->right = $rightNode;

        return $root;

    }
}
