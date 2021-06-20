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

/**
 * 从上到下打印出二叉树的每个节点，同一层的节点按照从左到右的顺序打印。
 * @param TreeNode $root
 * @return Integer[]
 */
function levelOrder($root) {

    if($root === null){

        return [];
    }

    $stack = new SplQueue();

    $stack->push($root);

    $result = [];

    while (!$stack->isEmpty()){

        $node = $stack->shift();

        $result[] = $node->val;

        if($node->left !== null){

            $stack->push($node->left);

        }

        if($node->right !== null){

            $stack->push($node->right);

        }

    }

    return $result;
}
