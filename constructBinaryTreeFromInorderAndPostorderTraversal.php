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
     * 根据一棵树的中序遍历与后序遍历构造二叉树。
     *
     * 注意:
     * 你可以假设树中没有重复的元素。
     * @param Integer[] $inorder
     * @param Integer[] $postorder
     * @return TreeNode
     */
    function buildTree($inorder, $postorder)
    {

        if ($inorder === [] || $postorder === []) {
            return null;
        }

        $root = $this->buildMyTree($inorder, 0, count($inorder) - 1, $postorder, 0, count($postorder) - 1);

        return $root;

    }

    function buildMyTree($inorder, $q, $p, $postorder, $i, $j)
    {

        if ($q > $p) {
            return null;
        }

        $root = new TreeNode($postorder[$j]);

        if ($q == $p) {
            return $root;
        }

        $k = $q;

        while ($q <= $p && $inorder[$k] != $postorder[$j]) {
            $k++;
        }

        //左子树个数
        $leftSize = $k - $q;

        $leftNode = $this->buildMyTree($inorder, $q, $q + $leftSize - 1, $postorder, $i, $i + $leftSize - 1);

        $rightNode = $this->buildMyTree($inorder, $k + 1, $p, $postorder, $leftSize + $i, $j - 1);

        $root->left = $leftNode;
        $root->right = $rightNode;

        return $root;

    }
}
