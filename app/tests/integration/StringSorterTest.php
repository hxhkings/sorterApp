<?php

use \PHPUnit\Framework\TestCase;

class StringSorterIntegrationTest extends TestCase
{
	protected $validator;
	protected $method1;
	protected $method2;

	protected function setUp()
	{
		$this->validator = new \Lib\Units\StringValidator;
		$this->method1 = new \Lib\Units\MergeSort;
		$this->method2 = new \Lib\Units\BubbleSort;
	}

	/** @test */

	public function is_string_sortable()
	{

		$bool = true;
		$actual = (new \Lib\Units\StringSorter($this->method1, $this->validator))->isSortable($bool);

		$this->assertTrue($actual);

		$bool = false;
		$actual = (new \Lib\Units\StringSorter($this->method2, $this->validator))->isSortable($bool);

		$this->assertFalse($actual);
	} 

	/** @test */

	public function sort_string_in_ascending_order()
	{
		$string = 'avfdrgdd5343';
		$expected = '3345adddfgrv';
		$actual = (new \Lib\Units\StringSorter($this->method1, $this->validator))->sortedString($string);

		$this->assertTrue($this->validator->isAlphanumeric($string));
		$this->assertEquals($expected, $actual);

		$string = 'avfdrgdd5343';
		$expected = '3345adddfgrv';
		$actual = (new \Lib\Units\StringSorter($this->method2, $this->validator))->sortedString($string);

		$this->assertEquals($expected, $actual);

		$string = '_ass_ ';
		$expected = 'The input must be alphanumeric.';
		$actual = (new \Lib\Units\StringSorter($this->method2, $this->validator))->sortedString($string);

		$this->assertEquals($expected, $actual);

		$string = ' ';
		$expected = 'The input must be alphanumeric.';
		$actual = (new \Lib\Units\StringSorter($this->method2, $this->validator))->sortedString($string);

		$this->assertEquals($expected, $actual);

		$string = '';
		$expected = 'The input must be alphanumeric.';
		$actual = (new \Lib\Units\StringSorter($this->method2, $this->validator))->sortedString($string);

		$this->assertEquals($expected, $actual);

		$string = 'avfdrgdd5343';
		$expected = 'Something went wrong.';
		$actual = (new \Lib\Units\StringSorter($this->method2))->sortedString($string);

		$this->assertEquals($expected, $actual);

		$string = 'avfdrgdd5343';
		$expected = 'Something went wrong.';
		$actual = (new \Lib\Units\StringSorter(null, $this->validator))->sortedString($string);

		$this->assertEquals($expected, $actual);
	}
}
