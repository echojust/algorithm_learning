<?php



class TreeNode {
     public $val = null;
     public $left = null;
     public $right = null;
     function __construct($value) { $this->val = $value; }
 }



class Solution {


    public $result;

    /**
     * @param TreeNode $root
     * @param TreeNode $p
     * @param TreeNode $q
     * @return TreeNode
     */
    function lowestCommonAncestor($root, $p, $q) {

        if($root === null){
            return $this->result;
        }

        $this->dfs($root, $p, $q);

        return $this->result;

    }


    function dfs($root, $p, $q)
    {

        if($root === null){
            return 0;
        }

        //检查左子树含p/q个数
        $leftContains = $this->dfs($root->left, $p, $q);
        if($this->result !== null){
            return 2;
        }

        //检查右子树含p/q个数
        $rightContains = $this->dfs($root->right, $p, $q);
        if($this->result !== null){
            return 2;
        }

        $rootContains = 0;
        //检查本身是否为p/q
        if($root === $p || $root === $q){
            $rootContains = 1;
        }

        if($rootContains === 1 && ($leftContains === 1 || $rightContains === 1)){
            $this->result = $root;
        }

        if($rootContains === 0 && ($leftContains === 1 && $rightContains === 1)){
            $this->result = $root;
        }

        return $leftContains + $rightContains + $rootContains;


    }
}