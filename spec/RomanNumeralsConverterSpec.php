<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use RomanNumeralsConverter;

class RomanNumeralsConverterSpec extends ObjectBehavior
{
    function it_calculate_the_roman_number_for_1()
    {
        $this->convet(1)->shouldReturn('I');
    }
    function it_calculate_the_roman_number_for_2()
    {
        $this->convet(2)->shouldReturn('II');
    }
    function it_calculate_the_roman_number_for_5()
    {
        $this->convet(5)->shouldReturn('V');
    }
    function it_calculate_the_roman_number_for_6()
    {
        $this->convet(6)->shouldReturn('VI');
    }
    function it_calculate_the_roman_number_for_9()
    {
        $this->convet(9)->shouldReturn('IX');
    }
    function it_calculate_the_roman_number_for_10()
    {
        $this->convet(10)->shouldReturn('X');
    }
    function it_calculate_the_roman_number_for_29()
    {
        $this->convet(29)->shouldReturn('XXIX');
    }
    function it_calculate_the_roman_number_for_49()
    {
        $this->convet(49)->shouldReturn('XLIX');
    }
    function it_calculate_the_roman_number_for_55()
    {
        $this->convet(55)->shouldReturn('LV');
    }
    function it_calculate_the_roman_number_for_99()
    {
        $this->convet(99)->shouldReturn('XCIX');
    }
    function it_calculate_the_roman_number_for_105()
    {
        $this->convet(105)->shouldReturn('CV');
    }
    function it_calculate_the_roman_number_for_400()
    {
        $this->convet(400)->shouldReturn('CD');
    }
    function it_calculate_the_roman_number_for_500()
    {
        $this->convet(500)->shouldReturn('D');
    }
    function it_calculate_the_roman_number_for_900()
    {
        $this->convet(900)->shouldReturn('CM');
    }
    function it_calculate_the_roman_number_for_1000()
    {
        $this->convet(1000)->shouldReturn('M');
    }
    function it_calculate_the_roman_number_for_1999()
    {
        $this->convet(1999)->shouldReturn('MCMXCIX');
    }
}
