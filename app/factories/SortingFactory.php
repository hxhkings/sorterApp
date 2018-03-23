<?php
/**
 * The Sorting Factory
 * 
 * PHP version 7
 */
namespace App\Factory;

/**
 * Does the sorting depending on the method given
 */
class SortingFactory
{
	/**
	 * @var string @method contains sorting method
	 */
	private $method;

	/**
	 *
	 * Assigns the method to the method property
	 *
	 * @param string $method the sorting method to be used
	 * @return none
	 */
	public function __construct(string $method)
	{
		$this->method = $method;
	}

	/**
	 *
	 * Combines all necessay methods to sort string
	 * 
	 * @param string $string the string to sort
	 * @return string the decorated sorted string
	 */
	public function doStringSorting(string $string)
	{
		$class = '\\App\\Controllers\\'.ucfirst($this->method) . 'Sort';
		$stringValidator = (new \App\Controllers\StringSorter(new $class, new \App\Controllers\StringValidator));
		$cleanString = (new \App\Builder\UserInput)->setString($string)->getString();

		return $this->sortResultDecorator($stringValidator->sortedString($cleanString));
	}

	/**
	 * 
	 * Decorates the sorted value with a dynamic statement
	 * based on the method
	 *
	 * @param mixed $result the sorted value
	 * @return the decorated statement
	 */
	private function sortResultDecorator($result) 
	{
		return 'Result using ' . ucfirst($this->method) . ' Sort => ' . $result;
	}
}