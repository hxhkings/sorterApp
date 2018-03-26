<?php

use \PHPUnit\Framework\TestCase;

class StringValidatorTest extends TestCase
{
	/** @test */

	public function is_string_alphanumeric()
	{
		$string = 'abnccss';
		$actual = (new \App\Controllers\StringValidator)->isAlphanumeric($string);

		$this->assertTrue($actual);

		$string = 'bbss1222';
		$actual = (new \App\Controllers\StringValidator)->isAlphanumeric($string);

		$this->assertTrue($actual);

		$string = '--+ sss';
		$actual = (new \App\Controllers\StringValidator)->isAlphanumeric($string);

		$this->assertFalse($actual);

		$string = '';
		$actual = (new \App\Controllers\StringValidator)->isAlphanumeric($string);

		$this->assertFalse($actual);

		$string = ' die(); ';
		$actual = (new \App\Controllers\StringValidator)->isAlphanumeric($string);

		$this->assertFalse($actual);
	}
}