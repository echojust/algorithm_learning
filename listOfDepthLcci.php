<?php



//Definition for a binary tree node.
class TreeNode {
     public $val = null;
     public $left = null;
     public $right = null;
     function __construct($value) { $this->val = $value; }
 }

//Definition for a singly-linked list.
class ListNode {
    public $val = 0;
     public $next = null;
     function __construct($val) { $this->val = $val; }
}

class Solution {

    /**
     * @param TreeNode $tree
     * @return ListNode[]
     */
    function listOfDepth($tree) {

        if($tree === null){
            return [];
        }

        $queue = new SplQueue();

        $queue->enqueue([$tree, 0]);

        $result = [];

        $p = null;

        while (!$queue->isEmpty()){

            $item = $queue->dequeue();

            if(isset($result[$item[1]])){

                $p->next = new ListNode($item[0]->val);

                $p = $p->next;

            }else{

                $p = new ListNode($item[0]->val);
                $result[$item[1]] = $p;

            }

            if($item[0]->left !== null){

                $queue->enqueue([$item[0]->left, $item[1] + 1]);
            }

            if($item[0]->right !== null){

                $queue->enqueue([$item[0]->right, $item[1] + 1]);
            }
        }


        return $result;
    }
}
