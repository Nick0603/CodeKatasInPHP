<?php

class RomanNumeralsConverter
{
    protected static $lookup = [
        1000 => 'M',
        900 => 'CM',
        500 => 'D',
        400 => 'CD',
        100 => 'C',
        90 => 'XC',
        50 => 'L',
        40 => 'XL',
        10 => 'X',
        9 => 'IX',
        5 => 'V',
        4 => 'IV'
    ];
    
    public function convet($number){
        $solution = '';
        foreach(static::$lookup as $limit => $glyph)
        {
            while($number >= $limit){
                $solution .= $glyph;
                $number -= $limit;
            }
        }
        $solution .= str_repeat('I',$number);
        return $solution;
    }
}
