<?php
/**
 * The TypeSorter Abstract
 * 
 * PHP version 7
 */
namespace App\Abstracts;

/**
 *
 * The parent of Sorting classes
 * of different sortable value types
 *
 */
abstract class TypeSorter
{	
	/**
	 * @var class $method the sorting algorithm
	 * class to be used
	 */
	protected $method;

	/**
	 *
	 * @var class $validator the validator to be used
	 *
	 */
	protected $validator;

	/**
	 * 
	 * Checks if value is valid to be sorted
	 *
	 * @param bool $validation the result of the validation
	 * assumes false if none given
	 * @return bool $validation the result of validation
	 */
	protected function isSortable(bool $validation = false): bool
	{
		return $validation;
	}
}