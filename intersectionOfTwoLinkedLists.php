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
 * @param ListNode $headA
 * @param ListNode $headB
 * @return ListNode
 */
function getIntersectionNode($headA, $headB) {


    $pA = $headA;

    $pB = $headB;

    $a_len = getNodeListLength($pA);

    $b_len = getNodeListLength($pB);

    $len = abs($a_len - $b_len);

    if($a_len >= $b_len){

        //A链表较长，则A链表指针先移动$a_len-$b_len位
        while ($len > 0){
            $pA = $pA->next;
            $len--;
        }

    }else{
        //同理则B链表先移动

        while ($len > 0){
            $pB = $pB->next;
            $len--;
        }
    }

    while($pA !== null && $pB !== null && $pA !== $pB){

        $pA = $pA->next;

        $pB = $pB->next;
    }

    if($pA === null || $pB ===null){
        return null;
    }else{
        return $pA;
    }




}

function getNodeListLength($head)
{
    $i = 0;
    while ($head !== null){
        $head = $head->next;
        $i++;

    }
    return $i;
}