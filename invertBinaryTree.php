<?php


/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */

/**
 * @param TreeNode $root
 * @return TreeNode
 */
function invertTree($root) {

    if($root === null){
        return null;
    }

    $node = $root->left;

    $root->left = invertTree($root->right);
    $root->right = invertTree($node);

    return $root;

}
