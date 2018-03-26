<?php

use \PHPUnit\Framework\TestCase;

class SortTest extends TestCase
{
	/** @test */

	public function is_alphabet_sorted_by_bubble_in_ascending_order()
	{
		$given = ['a', 'c', 'b', 'f', 'e', 'd'];
		$expected = ['a', 'b', 'c', 'd', 'e', 'f'];
		$actual = (new \App\Controllers\BubbleSort)->sort($given);

		$this->assertEquals($expected, $actual);	

		$given = ['c', 'A', 'b', 'f'];
		$expected = ['A', 'b', 'c', 'f'];
		$actual = (new \App\Controllers\BubbleSort)->sort($given);

		$this->assertEquals($expected, $actual);

		$given = ['c', 'a', 'A', 'B', 'b'];
		$expected = ['A', 'a', 'B', 'b', 'c'];
		$actual = (new \App\Controllers\BubbleSort)->sort($given);

		$this->assertEquals($expected, $actual);
	}

	/** @test */

	public function is_number_sorted_by_bubble_in_ascending_order()
	{
		$given = [2, 1, 4, 3, 7, 5];
		$expected = ['1', '2', '3', '4', '5', '7'];
		$actual = (new \App\Controllers\BubbleSort)->sort($given);

		$this->assertEquals($expected, $actual);

		$given = ['2', '1', '4', '3', '7', '5'];
		$expected = ['1', '2', '3', '4', '5', '7'];
		$actual = (new \App\Controllers\BubbleSort)->sort($given);

		$this->assertEquals($expected, $actual);
	}

	/** @test */

	public function is_alphanumeric_sorted_by_bubble_in_ascending_order()
	{
		$given = ['c', 2, 1, 'd', 'a', 'b'];
		$expected = ['1', '2', 'a', 'b', 'c', 'd'];
		$actual = (new \App\Controllers\BubbleSort)->sort($given);

		$this->assertEquals($expected, $actual);

		$given = ['c', '2', '1', 'd', 'a', 'b'];
		$expected = ['1', '2', 'a', 'b', 'c', 'd'];
		$actual = (new \App\Controllers\BubbleSort)->sort($given);

		$this->assertEquals($expected, $actual);

		$given = ['c', 2, 1, 'A', 'a', 'B'];
		$expected = ['1', '2', 'A', 'a', 'B', 'c'];
		$actual = (new \App\Controllers\BubbleSort)->sort($given);

		$this->assertEquals($expected, $actual);
	}

	/** @test */

	public function is_alphabet_sorted_by_merge_in_ascending_order()
	{
		$given = ['a', 'c', 'b', 'f', 'e', 'd'];
		$expected = ['a', 'b', 'c', 'd', 'e', 'f'];
		$actual = (new \App\Controllers\MergeSort)->sort($given);

		$this->assertEquals($expected, $actual);	

		$given = ['c', 'A', 'b', 'f'];
		$expected = ['A', 'b', 'c', 'f'];
		$actual = (new \App\Controllers\MergeSort)->sort($given);

		$this->assertEquals($expected, $actual);

		$given = ['c', 'a', 'A', 'B', 'b'];
		$expected = ['A', 'a', 'B', 'b', 'c'];
		$actual = (new \App\Controllers\MergeSort)->sort($given);


		$this->assertEquals($expected, $actual);
	}

	/** @test */

	public function is_number_sorted_by_merge_in_ascending_order()
	{
		$given = [2, 1, 4, 3, 7, 5];
		$expected = ['1', '2', '3', '4', '5', '7'];
		$actual = (new \App\Controllers\MergeSort)->sort($given);

		$this->assertEquals($expected, $actual);

		$given = ['2', '1', '4', '3', '7', '5'];
		$expected = ['1', '2', '3', '4', '5', '7'];
		$actual = (new \App\Controllers\MergeSort)->sort($given);

		$this->assertEquals($expected, $actual);
	}

	/** @test */

	public function is_alphanumeric_sorted_by_merge_in_ascending_order()
	{
		$given = ['c', 2, 1, 'd', 'a', 'b'];
		$expected = ['1', '2', 'a', 'b', 'c', 'd'];
		$actual = (new \App\Controllers\MergeSort)->sort($given);

		$this->assertEquals($expected, $actual);

		$given = ['c', '2', '1', 'd', 'a', 'b'];
		$expected = ['1', '2', 'a', 'b', 'c', 'd'];
		$actual = (new \App\Controllers\MergeSort)->sort($given);

		$this->assertEquals($expected, $actual);

		$given = ['c', 2, 1, 'A', 'a', 'B'];
		$expected = ['1', '2','A', 'a', 'B', 'c'];
		$actual = (new \App\Controllers\MergeSort)->sort($given);

		$this->assertEquals($expected, $actual);
	}

}