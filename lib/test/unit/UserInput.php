<?php

namespace Lib\Units;

class UserInput
{
	private $string;

	public function setString(string $string)
	{
		$this->string = htmlspecialchars(trim($string));

		return $this;
	}

	public function getString()
	{
		return $this->string;
	}
}