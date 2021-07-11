<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */


class Solution {

    /**
     * 输入一棵二叉树的根节点，判断该树是不是平衡二叉树。如果某二叉树中任意节点的左右子树的深度相差不超过1，那么它就是一棵平衡二叉树。
     * @param TreeNode $root
     * @return Boolean
     */
    function isBalanced($root) {

        return $this->height($root) >= 0;
    }


    function height($root)
    {

        if($root === null){
            return 0;
        }

        $leftHeight = $this->height($root->left);

        $rightHeight = $this->height($root->right);

        if($leftHeight == -1 || $rightHeight == -1 || abs($leftHeight - $rightHeight) > 1){
            return -1;
        }else{
            return max($leftHeight, $rightHeight) + 1;
        }

    }


}

