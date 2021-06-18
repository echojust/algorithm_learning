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
 * @return ListNode
 */
function oddEvenList($head) {

    if($head === null){
        return null;
    }

    $cur = $head;

    //当前位置计数
    $i = 0;

    //奇数位置链表
    $oddhead = new ListNode();
    $oddtail = $oddhead;
    //偶数位置链表
    $evenhead = new ListNode();
    $eventail = $evenhead;

    while ($cur !== null){

        //当前位置计数
        $i++;

        //下一节点预报存
        $tmp = $cur->next;

        //判断位置奇数偶数
        $is_odd = ($i % 2) ? true : false;

        $cur->next = null;
        //奇数位置放置于奇数列
        if($is_odd){

            $oddtail->next = $cur;
            $oddtail = $cur;

        }else{
            $eventail->next = $cur;

            $eventail = $cur;
        }

        //移动指针
        $cur = $tmp;

    }

    $oddtail->next = $evenhead->next;

    return $oddhead->next;

}
