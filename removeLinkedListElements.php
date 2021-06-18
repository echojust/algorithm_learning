<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
 class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
                 $this->val = $val;
                 $this->next = $next;
            }
 }


/**
 * 给你一个链表的头节点 head 和一个整数 val ，请你删除链表中所有满足 Node.val == val 的节点，并返回 新的头节点 。
 * @param ListNode $head
 * @param Integer $val
 * @return ListNode
 */
function removeElements($head, $val) {

    $virtual_head = new ListNode(null);

    $virtual_head->next = $head;

    //设置前节点
    $pre = $virtual_head;
    //当前节点
    $cur = $virtual_head->next;

    while ($cur != null){

        if($cur->val == $val){
            //不再指向该节点
            $pre->next = $cur->next;
        }else{
            $pre = $cur;
        }

        $cur = $cur->next;
    }

    return $virtual_head->next;
}
