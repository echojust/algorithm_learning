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

    public $tail;

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function convertBiNode($root) {

        if($root === null){
            return [];
        }

        $dummyHead = new TreeNode();

        $this->tail = $dummyHead;

        //题目本质为将二叉搜索树中序展开
        $this->inorder($root);

        return $dummyHead->right;

    }

    function inorder($root)
    {
        if($root === null){
            return;
        }

        $this->inorder($root->left);

        $this->tail->right = $root;
        $this->tail = $root;
        $this->tail->left = null;

        $this->inorder($root->right);

    }
}
