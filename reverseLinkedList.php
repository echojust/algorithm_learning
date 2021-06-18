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
 * 反转链表
 * @param ListNode $head
 * @return ListNode
 */
function reverseList($head) {

    $cur = $head;

    $prev = null;

    while ($cur !== null){

        $next = $cur->next;

        $cur->next = $prev;

        $prev = $cur;

        $cur = $next;

    }

    return $prev;

}
