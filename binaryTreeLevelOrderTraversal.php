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
 * 给你一个二叉树，请你返回其按 层序遍历 得到的节点值。 （即逐层地，从左到右访问所有节点）。
 * @param TreeNode $root
 * @return Integer[][]
 */
function levelOrder($root) {

    if($root === null){
        return [];
    }

    $queue = new SplQueue();

    $queue->enqueue([$root, 0]);

    $result = [];

    while (!$queue->isEmpty()){

        $item = $queue->dequeue();

        $result[$item[1]][] = $item[0]->val;

        if($item[0]->left !== null){
            $queue->enqueue([$item[0]->left, $item[1] + 1]);
        }

        if($item[0]->right !== null){
            $queue->enqueue([$item[0]->right, $item[1] + 1]);
        }

    }

    return $result;

}

