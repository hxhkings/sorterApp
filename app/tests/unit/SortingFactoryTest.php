<?php

use \PHPUnit\Framework\TestCase;

class SortingFactoryTest extends TestCase
{
	/** @test */

	public function is_final_result_of_sorting_correct()
	{
		$string = 'avfdrgdd5343';
		$expected = 'Result using Merge Sort => <span class="sorted">3345adddfgrv</span>';
		$method = 'Merge';
		$userInput = (new \App\Builder\UserInput)->setStringToSort($string)
											->setSortingStrategy($method);
		$actual = (new \App\Factory\SortingFactory($userInput))->doStringSorting();

		$this->assertEquals($expected, $actual);

		$expected = 'Result using Bubble Sort => <span class="sorted">3345adddfgrv</span>';
		$method = 'Bubble';
		$userInput->setSortingStrategy($method);
		$actual = (new \App\Factory\SortingFactory($userInput))->doStringSorting();

		$this->assertEquals($expected, $actual);
	}
}