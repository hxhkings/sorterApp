<?php

namespace Lib\Units;

class StringValidator
{
	public function isAlphanumeric(string $string): bool 
	{
		return ctype_alnum($string);
	}	
}