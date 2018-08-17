<?php
	//part-1//
function makeFullName($data){
			$f_name = $data['first_name'];
			$l_name = $data['last_name'];
			$full_name = $f_name.' '.$l_name;
			return $full_name;
		}
		
	//part-2//	
function wordCharacterCount($data){
			$g_string = $data['given_string'];
			$count = array();
			$count['total_number_of_character']=strlen($g_string);
			$count['total_number_of_word']=str_word_count($g_string);
			return $count;
		}
		
		///part-3//
		function myPassword($data){
			$password ='';
			$given_length = $data['given_length'];
			$value = array('a','b','c','d','e','f','g','h','i','j','k');
			
			for($i=1; $i<=$given_length; $i++){
				$index = rand(0,10);
			//echo $index;
			//echo "<br>";
			$password.= $value[$index];
			}
			
			return $password;
		}

?>