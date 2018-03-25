<?php

namespace Lib\Units;

class SortingFactory
{
	private $method;

	public function __construct(string $method)
	{
		$this->method = $method;
	}

	public function doStringSorting(string $string)
	{
		$class = '\\Lib\\Units\\'.ucfirst($this->method) . 'Sort';
		$stringSorter = (new \Lib\Units\StringSorter(new $class, new \Lib\Units\StringValidator));
		$cleanString = (new \Lib\Units\UserInput)->setString($string)->getString();

		return $this->sortResultDecorator($stringSorter->sortedString($cleanString));
	}

	public function sortResultDecorator($result) 
	{
		return 'Result using ' . ucfirst($this->method) . ' Sort => ' . $result;
	}
}
