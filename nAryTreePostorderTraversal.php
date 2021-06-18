<?php


// Definition for a Node.
class Node
{
    public $val = null;
    public $children = null;

    function __construct($val = 0)
    {
        $this->val = $val;
        $this->children = array();
    }
}

/**
 * 给定一个 N 叉树，返回其节点值的 后序遍历 。

N 叉树 在输入中按层序遍历进行序列化表示，每组子节点由空值 null 分隔（请参见示例）。
 * Class Solution
 */
class Solution{

    public $data = [];

    function preorder($root)
    {

        if ($root === null) {
            return $this->data;
        }

        foreach ($root->children as $children){

            $this->preorder($children);

        }

        $this->data[] = $root->val;

        return $this->data;

    }
}