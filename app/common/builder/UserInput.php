<?php
/**
 * The UserInput Builder
 * 
 * PHP version 7
 */
namespace App\Builder;

/**
 * Carries sanitized user inputed value/s
 */
class UserInput
{
	/**
	 * @var string $stringToSort the input string for sorting
	 */
	private $stringToSort;

	/**
	 * @var string $strategy the sorting method
	 */
	private $strategy;

	/**
	 * Assigns sanitized string value to string property
	 *
	 * @param string $string the string to be set
	 * @return class this UserInput class
	 */
	public function setStringToSort(string $string)
	{
		$this->stringToSort = htmlspecialchars(trim($string));

		return $this;
	}

	/**
	 * Gets the sanitized string
	 *
	 * @return string the sanitized string
	 */
	public function getStringToSort()
	{
		return $this->stringToSort;
	}

	/**
	 * Gets the sanitized strategy
	 *
	 * @return class the UserInput class
	 */
	public function setSortingStrategy(string $strategy)
	{
		$this->strategy = trim($strategy);

		return $this;
	}

	/**
	 * Gets the sorting method
	 *
	 * @return string the sorting method
	 */
	public function getSortingStrategy()
	{
		return $this->strategy;
	}
}