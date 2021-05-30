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
 * @param Integer $n
 * @return ListNode
 */
function removeNthFromEnd($head, $n) {

    //快慢指针
    $dummyHead = new ListNode(null);

    $dummyHead->next = $head;

    $slow = $fast = $dummyHead;

    //先移动快指针，比慢指针快n+1
    $i = 0;

    while ($i < $n + 1){
        $fast = $fast->next;
        $i++;
    }

    while ($fast !== null){

        $slow = $slow->next;
        $fast = $fast->next;

    }

    $slow->next = $slow->next->next;

    return $dummyHead->next;


}