<?php
$str = ('37 41 16 28 5 39 11 30 47 46 47 36 41 34 48 43 36 8 7 5 41 28 1 11 35 11 33 42 7 24 27 19 27 44 13 26 25 33 37 6 10 3 22 29 15 50 12 37 37 44');
$arr = explode(' ', $str);
	
	function quicksort ($array) {
		if(count($array) <2) {
			return $array;
		}
		  else {
			$pivot = $array[0];
			$less = [];
			$greater = [];
			for($i=1; $i<count($array); $i++) {
				if($array[$i] <= $pivot) {
					array_push($less, $array[$i]);
				}
				if($array[$i] > $pivot) {
					array_push($greater, $array[$i]);
				}
			}
			return array_merge(quicksort($less), [$pivot], quicksort($greater));
		}
	}


	print_r(quicksort($arr));
?>