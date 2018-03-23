<?php

use \PHPUnit\Framework\TestCase;

class StringValidatorTest extends TestCase
{
	/** @test */

	public function is_string_alphanumeric()
	{
		$string = 'abnccss';
		$actual = (new \Lib\Units\StringValidator)->isAlphanumeric($string);

		$this->assertTrue($actual);

		$string = 'bbss1222';
		$actual = (new \Lib\Units\StringValidator)->isAlphanumeric($string);

		$this->assertTrue($actual);

		$string = '--+ sss';
		$actual = (new \Lib\Units\StringValidator)->isAlphanumeric($string);

		$this->assertFalse($actual);

		$string = '';
		$actual = (new \Lib\Units\StringValidator)->isAlphanumeric($string);

		$this->assertFalse($actual);

		$string = ' die(); ';
		$actual = (new \Lib\Units\StringValidator)->isAlphanumeric($string);

		$this->assertFalse($actual);
	}
}