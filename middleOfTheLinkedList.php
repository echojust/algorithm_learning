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
 * 给定一个头结点为 head 的非空单链表，返回链表的中间结点。如果有两个中间结点，则返回第二个中间结点。
 * @param ListNode $head
 * @return ListNode
 */
function middleNode($head) {

    $virtual_head = new ListNode(null);

    $virtual_head->next = $head;

    $cur = $virtual_head->next;

    $count = 0;

    //统计链表个数
    while ($cur != null){

        $cur = $cur->next;

        $count++;
    }

    if(!$count){
        return null;
    }

    //计算中位，奇数取中位，偶数则取第二个中间节点
    //[1,2,3,4,5]
    //[1,2,3,4,5,6]
    if($count % 2){
        $middle = intval($count / 2) + 1;
    }else{
        $middle = intval($count / 2);
    }


    //重新循环
    $cur = $virtual_head->next;
    while ($cur != null && $count > $middle){

        $cur = $cur->next;

        $count--;

    }

    return $cur;

}