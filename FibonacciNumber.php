<?php

class FibonacciNumber
{

    public $map = [];

    /**
     * @param Integer $n
     * @return Integer
     */
    public function fib($n) {

        if($n == 0){
            return 0;
        }

        if($n == 1 || $n == 2){
            return 1;
        }

        if(isset($this->map[$n])){
            return $this->map[$n];
        }

        $first = $this->fib($n - 1) % 1000000007;

        $second = $this->fib ($n - 2) % 1000000007;


        $this->map[$n] = ($first + $second) % 1000000007;

        return $this->map[$n];

    }
}


$model = new FibonacciNumber();
$n = 7;

print_r($model->fib($n));
