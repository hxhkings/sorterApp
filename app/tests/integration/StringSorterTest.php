<?php

use \PHPUnit\Framework\TestCase;

class StringSorterIntegrationTest extends TestCase
{
	protected $validator;
	protected $method1;
	protected $method2;

	protected function setUp()
	{
		$this->validator = new \App\Controllers\StringValidator;
		$this->method1 = new \App\Controllers\MergeSort;
		$this->method2 = new \App\Controllers\BubbleSort;
	}

	/** @test */

	public function is_string_sortable()
	{

		$bool = true;
		$actual = (new \App\Controllers\StringSorter($this->method1, $this->validator))->isSortable($bool);

		$this->assertTrue($actual);

		$bool = false;
		$actual = (new \App\Controllers\StringSorter($this->method2, $this->validator))->isSortable($bool);

		$this->assertFalse($actual);
	} 

	/** @test */

	public function sort_string_in_ascending_order()
	{
		$string = 'avfdrgdd5343';
		$expected = '<span class="sorted">3345adddfgrv</span>';
		$actual = (new \App\Controllers\StringSorter($this->method1, $this->validator))->sortedString($string);

		$this->assertTrue($this->validator->isAlphanumeric($string));
		$this->assertEquals($expected, $actual);

		$string = 'avfdrgdd5343';
		$expected = '<span class="sorted">3345adddfgrv</span>';
		$actual = (new \App\Controllers\StringSorter($this->method2, $this->validator))->sortedString($string);

		$this->assertEquals($expected, $actual);

		$string = '_ass_ ';
		$expected = '<p class="error"> The input must be alphanumeric.</p>';
		$actual = (new \App\Controllers\StringSorter($this->method2, $this->validator))->sortedString($string);

		$this->assertEquals($expected, $actual);

		$string = ' ';
		$expected = '<p class="error"> The input must be alphanumeric.</p>';
		$actual = (new \App\Controllers\StringSorter($this->method2, $this->validator))->sortedString($string);

		$this->assertEquals($expected, $actual);

		$string = '';
		$expected = '<p class="error"> The input must be alphanumeric.</p>';
		$actual = (new \App\Controllers\StringSorter($this->method2, $this->validator))->sortedString($string);

		$this->assertEquals($expected, $actual);

		$string = 'avfdrgdd5343';
		$expected = '<p class="error">Something went wrong.</p>';
		$actual = (new \App\Controllers\StringSorter($this->method2))->sortedString($string);

		$this->assertEquals($expected, $actual);

		$string = 'avfdrgdd5343';
		$expected = '<p class="error">Something went wrong.</p>';
		$actual = (new \App\Controllers\StringSorter(null, $this->validator))->sortedString($string);

		$this->assertEquals($expected, $actual);
	}
}
