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

class Solution{

    public $data = [];

    function preorder($root)
    {

        if ($root === null) {
            return $this->data;
        }

        $this->data[] = $root->val;

        foreach ($root->children as $children){

            $this->preorder($children);

        }

        return $this->data;

    }
}

