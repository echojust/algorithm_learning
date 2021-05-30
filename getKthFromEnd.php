<?php

class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}



/**
 * @param ListNode $head
 * @param Integer $k
 * @return ListNode
 */
function getKthFromEnd($head, $k) {

    if($head === null || $head->next === null){
        return null;
    }

    $cur = $head;

    $count = 0;

    while ($cur != null){

        $cur = $cur->next;

        $count++;

    }

    if($k > $count){
        return null;
    }

    $break_num = $count - $k;

    $cur = $head;

    while ($cur != null){

        if($break_num == 0){
            return $cur;
        }

        $break_num--;

        $cur = $cur->next;

    }
}
