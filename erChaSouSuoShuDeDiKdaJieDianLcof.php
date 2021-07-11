<?php

/**
 * Definition for a binary tree node.
 * */
 class TreeNode {
     public $val = null;
     public $left = null;
     public $right = null;
     function __construct($value) { $this->val = $value; }
}

class Solution {

     public $result = [];

     public $val;

     public $count = 0;
    /**
     * 给定一棵二叉搜索树，请找出其中第k大的节点。
     * @param TreeNode $root
     * @param Integer $k
     * @return Integer
     */
    function kthLargest($root, $k) {

        if($root === null){
            return $root;
        }

        $this->inorder($root);

        $len = count($this->result);

        return $this->result[$len - $k];

    }


    function inorder($root)
    {

        if($root === null){
            return null;
        }

        $this->inorder($root->left);

        $this->result[] = $root->val;

        $this->inorder($root->right);

    }

    function inorder1($root, $k)
    {
        if($root === null){
            return;
        }

        $this->inorder($root->right, $k);

        if($this->count >= $k){
            return;
        }
        $this->count++;
        if($this->count === $k){
            $this->val = $root->val;
            return;
        }
        $this->inorder($root->left, $k);


    }






}
