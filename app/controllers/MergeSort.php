<?php

/**
 * The MergeSort Controller
 * 
 * PHP version 7
 */
namespace App\Controllers;

/**
 *
 * Sorts an array within
 * a time complexity of O(nlogn)
 *
 */
class MergeSort implements \App\Interfaces\SortAlgo
{	
	/**
	 * Uses divide-and-conquer method
	 * recursively until it reaches an array length of 1
	 *
	 * @param array $arr the array containing alphanumeric
	 * values to sort
	 * @return the combined sorted array
	 */
	public function sort(array $arr): array 
	{
		$len = count($arr);
		$mid = (int)$len / 2;
		if ($len == 1)
			return $arr;

		$left = $this->sort(array_slice($arr, 0, $mid));
		$right = $this->sort(array_slice($arr, $mid));

		return $this->merge($left, $right);
	}

	/**
	 * Sorts divided arrays in ascending order,
	 * while being combined,
	 * considering numeric values as lowest
	 * and the capital letter lower than it's 
	 * equivalent small letter 
	 * 
	 * @param array $left, array $right the left
	 * and right divisions of the initially given array
	 * @return the combined sorted array
	 */
	private function merge(array $left, array $right): array 
	{
		$combined = [];
		$countLeft = count($left);
		$countRight = count($right);
		$leftIndex = $rightIndex = 0;

		while ($leftIndex < $countLeft && $rightIndex < $countRight) {
			$val1 = (ctype_alpha($left[$leftIndex])) ? 
					strtolower($left[$leftIndex]) : (string)$left[$leftIndex];
			$val2 = (ctype_alpha($right[$rightIndex])) ? 
					strtolower($right[$rightIndex]) : (string)$right[$rightIndex];

			if (($val1 == $val2 && $left[$leftIndex] > $right[$rightIndex]) || $val1 > $val2) {	
				$combined[] = $right[$rightIndex];
				$rightIndex++;
			} else {
				$combined[] = $left[$leftIndex];
				$leftIndex++;
			}
		}
		while ($leftIndex < $countLeft) {
			$combined[] = $left[$leftIndex];
			$leftIndex++;
		}
		while ($rightIndex < $countRight) {
			$combined[] = $right[$rightIndex];
			$rightIndex++;
		}
		return $combined;
	}
}