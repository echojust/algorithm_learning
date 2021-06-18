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
function isPalindrome($head){

    $newHead = new ListNode(null);

    $newHead->next = $head;

    $cur = $newHead->next;

    //确定中间节点
    $middle_node = findMidNode($cur);

    //从中间节点开始反转
    $rightNodereverse = getReverseNodeList($middle_node->next);

    //比较链表
    while ($rightNodereverse !== null){

        if($rightNodereverse->val != $head->val){
            return false;
        }

        $head = $head->next;

        $rightNodereverse = $rightNodereverse->next;

    }

    return true;

}

function findMidNode($head)
{
    //快慢指针确定中间节点
    $slow = $head;
    $fast = $head;

    while ($fast->next !== null && $fast->next->next !== null)
    {

        $slow = $slow->next;

        $fast = $fast->next->next;

    }

    return $slow;
}

function getReverseNodeList($head)
{
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

