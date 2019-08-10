<?php


class PrimeFactors
{
    public function generator($number)
    {
        $primes = [];
        $candidate = 2;
        while( $number > 1){
            while( $number % $candidate == 0){
                $primes[] = $candidate;
                $number = $number/$candidate;
            }
            $candidate++;
        }
        return $primes;
    }
}
