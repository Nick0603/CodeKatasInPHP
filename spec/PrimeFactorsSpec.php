<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use PrimeFactors;
use Prophecy\Argument;

class PrimeFactorsSpec extends ObjectBehavior
{
    function it_return_empty_array_for_1()
    {
        $this->generator(1)->shouldReturn([]);
    }
    function it_return_2_for_2()
    {
        $this->generator(2)->shouldReturn([2]);
    }
    function it_return_3_for_3()
    {
        $this->generator(3)->shouldReturn([3]);
    }
    function it_return_2_2_for_4()
    {
        $this->generator(4)->shouldReturn([2,2]);
    }
    function it_return_5_for_5()
    {
        $this->generator(5)->shouldReturn([5]);
    }
    function it_return_2_3_for_6()
    {
        $this->generator(6)->shouldReturn([2,3]);
    }
    function it_return_7_for_7()
    {
        $this->generator(7)->shouldReturn([7]);
    }
    function it_return_2_2_5_5_for_100()
    {
        $this->generator(100)->shouldReturn([2,2,5,5]);
    }
}
