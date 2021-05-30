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
 * 给你两个 非空 的链表，表示两个非负的整数。它们每位数字都是按照 逆序 的方式存储的，并且每个节点只能存储 一位 数字。

请你将两个数相加，并以相同形式返回一个表示和的链表。

你可以假设除了数字 0 之外，这两个数都不会以 0 开头。

来源：力扣（LeetCode）
链接：https://leetcode-cn.com/problems/add-two-numbers
著作权归领扣网络所有。商业转载请联系官方授权，非商业转载请注明出处。
 * @param ListNode $l1
 * @param ListNode $l2
 * @return ListNode
 */
function addTwoNumbers($l1, $l2) {

    $newHead = new ListNode(null);

    $tail = $newHead;

    //记录满10进位数
    $carry = 0;

    while ($l1 !== null || $l2 !== null){
        //加和值
        $sum = 0;
        if($l1 !== null){
            $sum += $l1->val;
            $l1 = $l1->next;
        }

        if($l2 !== null){
            $sum += $l2->val;
            $l2 = $l2->next;
        }

        if($carry !== 0){
            $sum += $carry;
        }

        //下一节点
        $tail->next = new ListNode($sum % 10);

        //计算新进位值
        $carry = intval($sum / 10);

        $tail = $tail->next;
    }

    if($carry){
       $tail->next = new ListNode($carry);
    }

    return $newHead->next;

}