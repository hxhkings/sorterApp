<?php

namespace Lib\Units;

class StringSorter
{
	private $method;

	private $validator;

	public function __construct($method = NULL, $validator = NULL)
	{
		$this->method = $method;
		$this->validator = $validator;
	}

	public function isSortable(bool $validation = false)
	{
		return $validation;
	}

	public function sortedString(string $string): string
	{
		if (!$this->validator || !$this->method) {
			return 'Something went wrong.';
		}
		try {
			if ($this->isSortable($this->validator->isAlphanumeric($string))) {
				$str_to_arr  = str_split($string);

				return implode('', $this->method->sort($str_to_arr));
			} else {
				return 'The input must be alphanumeric.';
			}
		} catch (Exception $e) {
			return 'Wrong Methodology';
		}
	}
}