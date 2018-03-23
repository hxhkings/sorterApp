<?php

namespace Lib\Units;


class MergeSort
{
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