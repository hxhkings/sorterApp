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
	 * @var string $string the input string
	 */
	private $string;

	/**
	 * Assigns sanitized string value to string property
	 *
	 * @param string $string the string to be set
	 * @return class this UserInput class
	 */
	public function setString(string $string)
	{
		$this->string = htmlspecialchars(trim($string));

		return $this;
	}

	/**
	 * Gets the sanitized string
	 *
	 * @return string the sanitized string
	 */
	public function getString()
	{
		return $this->string;
	}
}