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
	 * @var string $method contains sorting builder used
	 */
	private $sortBuilder;

	/**
	 *
	 * Assigns the method to the method property
	 *
	 * @param string $method the sorting builder to be used
	 * @return none
	 */
	public function __construct($builder)
	{
		$this->sortBuilder = $builder;
	}

	/**
	 *
	 * Combines all necessay methods to sort string
	 * 
	 * @param none
	 * @return string the decorated sorted string
	 */
	public function doStringSorting()
	{
		$sortClass = '\\App\\Controllers\\'.$this->sortBuilder->getSortingStrategy() . 'Sort';
		$stringSorter = (new \App\Controllers\StringSorter(new $sortClass, new \App\Controllers\StringValidator));
		$cleanString = $this->sortBuilder->getStringToSort();

		return $this->sortResultDecorator($stringSorter->sortedString($cleanString));
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
		return 'Result using ' . $this->sortBuilder->getSortingStrategy() . ' Sort => ' . $result;
	}
}
