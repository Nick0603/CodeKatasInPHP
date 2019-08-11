<?php

namespace Acme;

class FizzBuzz
{
    public function excute($number)
    {
        if($number % 15 == 0){
            return 'fizzbuzz';
        }
        if($number % 3 == 0){
            return 'fizz';
        }
        if($number % 5 == 0){
            return 'buzz';
        }
        return $number;
    }

    function excuteUpTo($number)
    {
        return array_map(function($i){
            return $this->excute($i);
        },range(1,$number));
    }
}
