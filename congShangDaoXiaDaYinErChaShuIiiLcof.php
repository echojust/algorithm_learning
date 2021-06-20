<?php

/**
 * 请实现一个函数按照之字形顺序打印二叉树，即第一行按照从左到右的顺序打印，第二层按照从右到左的顺序打印，第三行再按照从左到右的顺序打印，其他行以此类推。
 * @param TreeNode $root
 * @return Integer[][]
 */
function levelOrder($root)
{

    if ($root === null) {
        return [];
    }

    $queue = new SplQueue();

    $queue->enqueue([$root, 0]);

    $result = [];

    while (!$queue->isEmpty()) {

        $item = $queue->dequeue();

        //奇数层，从左到右；//偶数层，从右到左
        $result[$item[1]] = isset($result[$item[1]]) ? $result[$item[1]] : [];
        if($item[1] % 2){

            array_unshift($result[$item[1]], $item[0]->val);

        }else{
            $result[$item[1]][] = $item[0]->val;
        }



        $index = $item[1] + 1;


        if ($item[0]->left !== null) {

            $queue->push([$item[0]->left, $index]);

        }

        if ($item[0]->right !== null) {

            $queue->push([$item[0]->right, $index]);

        }

    }

    return $result;
}