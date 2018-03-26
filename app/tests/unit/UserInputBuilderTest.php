<?php

use \PHPUnit\Framework\TestCase;

class UserInputBuilderTest extends TestCase
{
	protected $userInput;

	protected function setUp()
	{
		$this->userInput = new \App\Builder\UserInput();
	}

	/** @test */

	public function input_typed_by_user_is_string()
	{
		$this->userInput->setStringToSort('string');
		$this->assertEquals('string', gettype($this->userInput->getStringToSort()));
	}

	/** @test */

	public function type_of_set_return_is_object()
	{
		$userInputSetType = $this->userInput->setStringToSort('string');

		$this->assertEquals($this->userInput, $userInputSetType);
	}

	/** @test */

	public function is_selected_strategy_string_sanitized()
	{
		$string = '   Bubble  ';
		$expected = 'Bubble';
		$actual = $this->userInput->setSortingStrategy($string)->getSortingStrategy();

		$this->assertEquals($expected, $actual);

		$string = '   Merge';
		$expected = 'Merge';
		$actual = $this->userInput->setSortingStrategy($string)->getSortingStrategy();

		$this->assertEquals($expected, $actual);
	}
}
