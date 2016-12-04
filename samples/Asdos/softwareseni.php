<?php

namespace SoftwareSeni {

	class OnlineTest {
		public $array;
		public $array2;
		public $array3;
		public $array4;
		public $array5;
		public $array6;
		public function __construct() {
			$this->array = array (
					2,
					6,
					12,
					7,
					3,
					4,
					19,
					21,
					5,
					6 
			);
			$this->array2 =array(2,3,1,4);
			$this->array3 = array(2,5,3,4);
			$this->array4 = array(1,3,4,2,5,6,3);
			$this->array5 = array(1,2,3,6,5,4,7);
			$this->array6 = array(1,2,3,5,4,7,8);
			
		}
		public function question1() {
			/*
			 * Assuming it is written in OOP PHP and with these conditions:
			 * Array must be at least containing 2 numbers to determine the 2nd largest number.
			 * If array contains 2 same numbers, then it will return -1, for example: array(2,2).
			 */
			echo $this->sortfunc ( $this->array );
		}
		private function sortfunc($input) {
			if (count ( $input ) > 1) { // check array length. 2nd largest number assuming there should be at least 2 numbers
				$max = 0;
				for($i = 0; $i < 2; $i ++) { // need to perform twice for 2nd largest number
					if (count ( $input ) <= 0) { // if between 2 iterations there is no number left,
					                             // it means that the numbers already eliminated in 1st iteration and both have same number, e.g. array(2,2)
					                             // then return -1
						return - 1;
					}
					$max = max ( $input );
					while ( ($index = array_search ( $max, $input )) !== false ) {
						// remove same value in the array
						unset ( $input [$index] );
					}
				}
				return $max;
			} else { // if length <= 1 then return -1
				return - 1;
			}
		}
		
		public function question2($input){
			if($this->checkSequence($input) === true)
				echo 'true';
				else
					echo 'false';
		}
		
		private function checkSequence($input){
			if(count($input) > 0){ //check length of array
				//determine maximum number in array
				$max = max($input);
				$result = true;
				for($i = 1; $i <= $max; $i++){
					$j = 0;
		
					if( array_search($i, $input) === false) //if not found
						return false;
		
						while(($index = array_search($i, $input)) !== false){
							if($j > 0) //if more than 1 number found, then return false
								return false;
								unset($input[$index]);
								$j++;
						}
				}
				return $result;
			}
			else
				return false;
		}
	}
	
	/* --------------DISPLAY RESULT SECTION------------------------- */
	/* print result for question 1 */
	$onlinetest = new OnlineTest ();
	echo 'Answer for question 1: ';
	echo $onlinetest->question1 ();
	echo '<br/>';
	echo '<br/>';
	echo 'Answer for question 2: ';
	echo '<br/>';
	echo 'array(2,3,1,4): ';
	echo $onlinetest->question2($onlinetest->array2);
	echo '<br/>';
	echo ' array(2,5,3,4): ';
	echo $onlinetest->question2($onlinetest->array3);
	echo '<br/>';
	echo 'array(1,3,4,2,5,6,3): ';
	echo $onlinetest->question2($onlinetest->array4);
	echo '<br/>';
	echo 'array(1,2,3,6,5,4,7): ';
	echo $onlinetest->question2($onlinetest->array5);
	echo '<br/>';
	echo 'array(1,2,3,6,5,4,7): ';
	echo $onlinetest->question2($onlinetest->array6);
}
?>
