<?php

/**
 * Definition for a binary tree node.
 *
 */
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

/**
 * 给定两个二叉树，想象当你将它们中的一个覆盖到另一个上时，两个二叉树的一些节点便会重叠。
 * 你需要将他们合并为一个新的二叉树。合并的规则是如果两个节点重叠，那么将他们的值相加作为节点合并后的新值，否则不为 NULL 的节点将直接作为新二叉树的节点。
 * 来源：力扣（LeetCode）
 * 链接：https://leetcode-cn.com/problems/merge-two-binary-trees
 * @param TreeNode $root1
 * @param TreeNode $root2
 * @return TreeNode
 */
function mergeTrees($root1, $root2)
{

    if ($root1 === null) {
        return $root2;
    }

    if ($root2 === null) {
        return $root1;
    }

    $node = new TreeNode();

    $node->val = $root1->val + $root2->val;

    $node->left = mergeTrees($root1->left, $root2->left);

    $node->right = mergeTrees($root1->right, $root2->right);

    return $node;

}
