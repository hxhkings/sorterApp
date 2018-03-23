<?php
/**
 * The StringSorter Controller
 * 
 * PHP version 7
 */
namespace App\Controllers;

/**
 *
 * Sorts the user inputed string in ascending order
 *
 */
class StringSorter extends \App\Abstracts\TypeSorter
{
	/**
	 *
	 * Assigns the parameter values as class properties
	 *
	 * @param class $method the selected algorithm method
	 * @param class $validator the string validator to be used
	 * @return none
	 */
	public function __construct(\App\Interfaces\SortAlgo $method = NULL, $validator = NULL)
	{
		$this->method = $method;
		$this->validator = $validator;
	}

	/**
	 *
	 * Sorts the string given that it's valid
	 *
	 * @param string $string the string to be sorted
	 * @return string the sorted string or error message if something went 
	 */
	public function sortedString(string $string): string
	{
		if (!$this->validator || !$this->method) {
			return '<p class="error">Something went wrong.</p>';
		}
		try {
			if ($this->isSortable($this->validator->isAlphanumeric($string))) {
				$str_to_arr  = str_split($string);
				return '<span class="sorted">'. 
						implode('', $this->method->sort($str_to_arr)) . '</span>';
			} else {
				return '<p class="error"> The input must be alphanumeric.</p>';
			}
		} catch (Exception $e) {
			return '<p class="error">Some exception.</p>';
		}
	}
}