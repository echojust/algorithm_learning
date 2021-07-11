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

class Solution
{
    public $tail;
    /**
     * 给你二叉树的根结点 root ，请你将它展开为一个单链表：
     *
     * 展开后的单链表应该同样使用 TreeNode ，其中 right 子指针指向链表中下一个结点，而左子指针始终为 null 。
     * 展开后的单链表应该与二叉树 先序遍历 顺序相同。
     * root = [1,2,5,3,4,null,6] =》 [1,null,2,null,3,null,4,null,5,null,6]
     * @param TreeNode $root
     * @return NULL
     */
    function flatten($root)
    {
        if($root === null){
            return null;
        }
        $dummyHead = new TreeNode();

        $this->tail = $dummyHead;

        //前序遍历展开
        $this->preorder($root);

        return $dummyHead;
    }


    function preorder($root)
    {

        if($root === null){

            return;
        }
        //左子树
        $left = $root->left;
        //右子树
        $right = $root->right;

        $this->tail->right = $root;
        $this->tail->left = null;
        $this->tail = $root;

        $this->preorder($left);
        $this->preorder($right);


    }
}