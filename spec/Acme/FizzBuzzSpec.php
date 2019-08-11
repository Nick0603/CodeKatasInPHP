<?php

namespace spec\Acme;

use Acme\FizzBuzz;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class FizzBuzzSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(FizzBuzz::class);
    }

    function it_translate_1_to_1(){
        $this->excute(1)->shouldReturn(1);
    }
    function it_translate_2_to_2(){
        $this->excute(2)->shouldReturn(2);
    }
    function it_translate_3_to_fizz(){
        $this->excute(3)->shouldReturn('fizz');
    }
    function it_translate_4_to_4(){
        $this->excute(4)->shouldReturn(4);
    }
    function it_translate_5_to_buzz(){
        $this->excute(5)->shouldReturn('buzz');
    }
    function it_translate_14_to_14(){
        $this->excute(14)->shouldReturn(14);
    }
    function it_translate_123_to_fizz(){
        $this->excute(123)->shouldReturn('fizz');
    }
    function it_translate_a_sequence_of_numbers_for_fizzbuzz(){
        $this->excuteUpTo(15)->shouldReturn([1,2,'fizz',4,'buzz','fizz',7,8,'fizz','buzz',11,'fizz',13,14,'fizzbuzz']);
    }
}
