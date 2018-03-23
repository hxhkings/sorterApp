<?php
/**
 * The StringValidator Controller
 * 
 * PHP version 7
 */
namespace App\Controllers;

/**
 *
 * Validates the string
 *
 */
class StringValidator
{	
	/**
	 *
	 * Checks if the string is alphanumeric
	 *
	 * @param string $string the string to check
	 * @return bool true if alphanumeric false if not
	 */
	public function isAlphanumeric(string $string): bool 
	{
		return ctype_alnum($string);
	}	
}