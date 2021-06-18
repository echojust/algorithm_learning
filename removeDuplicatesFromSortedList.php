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
 * 存在一个按升序排列的链表，给你这个链表的头节点 head ，请你删除所有重复的元素，使每个元素 只出现一次 。
返回同样按升序排列的结果链表。
 * @param ListNode $head
 * @return ListNode
 */
function deleteDuplicates($head) {

    $virtual_head = new ListNode(null);

    $virtual_head->next = $head;

    $pre = $virtual_head;

    $cur = $pre->next;

    while ($cur !== null){

        if($cur->val === $pre->val){
            $pre->next = $cur->next;
        }else{
            $pre = $cur;
        }
        $cur = $cur->next;

    }

    return $virtual_head->next;

}
