<?php

use \PHPUnit\Framework\TestCase;

class UserInputBuilderTest extends TestCase
{
	protected $userInput;

	protected function setUp()
	{
		$this->userInput = new \Lib\Units\UserInput();
	}

	/** @test */

	public function input_typed_by_user_is_string()
	{
		$this->userInput->setString('string');
		$this->assertEquals('string', gettype($this->userInput->getString()));
	}

	/** @test */

	public function type_of_set_return_is_object()
	{
		$userInputSetType = $this->userInput->setString('string');

		$this->assertEquals($this->userInput, $userInputSetType);
	}
}
