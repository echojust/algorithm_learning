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
 * @param Integer $k
 * @return ListNode
 */
function reverseKGroup($head, $k)
{

    if ($head === null) {
        return null;
    }

    if ($k === 1) {
        return $head;
    }

    //虚拟头节点
    $dummyHead = new ListNode();

    //尾指针节点
    $tail = $dummyHead;

    $curNode = $head;

    while ($curNode !== null){

        $i = 0;

        $p = $curNode;

        while ($p !== null){

            $i++;

            if($i == $k){

                break;
            }

            $p = $p->next;
        }

        if($p === null){

            $tail->next = $curNode;

            return $dummyHead->next;

        }else{

            $tmp = $p->next;

            list($tail->next, $tail) = getReverseNodeList($curNode, $p);

            $curNode = $tmp;
        }

    }

    return $dummyHead->next;

}

function getReverseNodeList($head, $tail)
{
    $prev = null;

    $cur = $head;

    while ($cur !== $tail){


        $next = $cur->next;

        $cur->next = $prev;

        $prev = $cur;

        $cur = $next;
    }
    //原尾部转为头部，头部转为尾部
    $tail->next = $prev;

//    $prev = $tail;

    return [$tail, $head];
}
