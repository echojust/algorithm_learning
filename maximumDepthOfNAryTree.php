<?php

/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $children = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->children = array();
 *     }
 * }
 */

/**
 * @param Node $root
 * @return integer
 */
function maxDepth($root) {

    if($root === null){
        return 0;
    }

    if($root->children == []){
        return 1;
    }

    $height = [];

    foreach ($root->children as $child){

        $height[] = maxDepth($child);

    }

    return max($height) + 1;


}


function height($root)
{

}



