<?php
class StringCalculator {

	const MAX_NUMBER_ALLOWED = 1000;
	public function add($numbers){
		$numbers = $this->parseNumber($numbers);
		return array_sum(array_map(function($number){
			$this->guardAginstInvalidNumber($number);
			if($number == '' || $number >= self::MAX_NUMBER_ALLOWED){
				return 0;
			}
			return $number;
		},$numbers));
		
	}
	public function parseNumber($numbers)
	{
		$numbers = trim($numbers);
		return array_map('intval', preg_split('/\s*(,|\\\n)\s*/',$numbers));
	}
	public function guardAginstInvalidNumber($number)
	{
		if($number < 0)
		{
			throw new InvalidArgumentException("Invalid number provided: {$number}");
		}
	}
	

}