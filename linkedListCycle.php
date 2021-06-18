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
 * @return Boolean
 */
function hasCycle($head) {

    if($head === null){
        return false;
    }

    $dummyHead = new ListNode(null);

    $dummyHead->next = $head;

    $slow = $fast = $dummyHead;

    while ($slow !== null && $fast !== null){

        $slow = $slow->next;

        $fast = $fast->next->next;

        if($slow === $fast){
            return true;
        }

    }

    return false;

}
