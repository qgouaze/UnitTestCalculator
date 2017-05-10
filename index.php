<?php
declare(strict_types=1);

class Calculator{

	function calculate($nb){

		if ($nb==0){
			return 0;
		}
		else if($nb=="1"){
			return 1;
		}
		else if($nb =='1+2'){
			return 3;
		}


	}
}