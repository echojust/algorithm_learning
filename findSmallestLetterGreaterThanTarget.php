<?php

class Solution {

    /**
     * @param String[] $letters
     * @param String $target
     * @return String
     */
    function nextGreatestLetter($letters, $target) {

        $low = 0;

        $high = count($letters) - 1;

        while ($low <= $high){

            $mid = intval(($high + $low) / 2);

            $val = $letters[$mid];

            if($val > $target){

                if($mid === 0 || $letters[$mid - 1] < $target){

                    return $letters[$mid];

                }else{

                    $high = $mid - 1;

                }

            }else{

                $low = $mid + 1;

            }

        }


        return $letters[0];

    }
}


$model = new Solution();

var_dump($model->nextGreatestLetter(["c","f","j"], "a"));