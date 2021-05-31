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
 * 输入两个递增排序的链表，合并这两个链表并使新链表中的节点仍然是递增排序的。
 * 注意：本题与主站 21 题相同：https://leetcode-cn.com/problems/merge-two-sorted-lists/
 * @param ListNode $l1
 * @param ListNode $l2
 * @return ListNode
 */
function mergeTwoLists($l1, $l2) {

    if($l1 === null)
        return $l2;

    if($l2 === null)
        return $l1;

    $p1 = $l1;
    $p2 = $l2;

    $head = new ListNode(null);

    $tail = $head;

    while ($p1 !== null && $p2 !== null){
        //比较值大小，链接到结果链表尾部
        if($p1->val <= $p2->val){

            $tail->next = $p1;

            $tail = $p1;

            $p1 = $p1->next;

        }else{

            $tail->next = $p2;

            $tail = $p2;

            $p2 = $p2->next;

        }

    }

    if($p1 !== null){
        $tail->next = $p1;
    }
    if($p2 !== null){
        $tail->next = $p2;
    }

    return $head->next;

}
