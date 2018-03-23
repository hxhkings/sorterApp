<?php

namespace Lib\Units;

class BubbleSort
{
	public function sort(array $arr): array
	{
		$len = count($arr);
		$count = 0;
		$bound = $len - 1;
		for ($i = 0; $i < $len; $i++) {
			$swapped = FALSE;
			$newbound = 0;
			for ($j = 0; $j < $bound; $j++) {
				$count++;

				$val1 = (ctype_alpha($arr[$j])) ? 
						strtolower($arr[$j]) : (string)$arr[$j];
				$val2 = (ctype_alpha($arr[$j + 1])) ? 
						strtolower($arr[$j + 1]) : (string)$arr[$j + 1];

				if (($val1 == $val2 && $arr[$j] > $arr[$j + 1]) || $val1 > $val2) {
					$tmp = $arr[$j + 1];
					$arr[$j + 1] = $arr[$j];
					$arr[$j] = $tmp;
					$swapped = TRUE;
					$newbound = $j;
				}
				
			}
			$bound = $newbound;
			if (!$swapped) break;
		}
		return $arr;
	}
}

