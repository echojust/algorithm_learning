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
function preorderTraversal($root) {

    if($root === null){
        return [];
    }

    $a[] = $root->val;

    $b = preorderTraversal($root->left);

    $c = preorderTraversal($root->right);

    return array_merge($a, $b, $c);

}
