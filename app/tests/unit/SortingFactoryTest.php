<?php

use \PHPUnit\Framework\TestCase;

class SortingFactoryTest extends TestCase
{
	/** @test */

	public function is_final_result_of_sorting_correct()
	{
		$string = 'avfdrgdd5343';
		$expected = 'Result using Merge Sort => 3345adddfgrv';
		$method = 'merge';
		$actual = (new Lib\Units\SortingFactory($method))->doStringSorting($string);

		$this->assertEquals($expected, $actual);

		$expected = 'Result using Bubble Sort => 3345adddfgrv';
		$method = 'bubble';
		$actual = (new Lib\Units\SortingFactory($method))->doStringSorting($string);

		$this->assertEquals($expected, $actual);
	}
}