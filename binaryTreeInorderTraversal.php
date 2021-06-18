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
 * @param TreeNode $root
 * @return Integer[]
 */
function inorderTraversal($root) {
    if($root === null){
        return [];
    }

    $a[] = $root->val;

    $b = inorderTraversal($root->left);

    $c = inorderTraversal($root->right);

    return array_merge($b, $a, $c);
}
