<?php
	require_once 'functions.php';
	
	$result ='';
	$word ='';
	$character ='';
	if(isset($_POST['btn'])){
		
		$result = wordCharacterCount($_POST);
		$character = $result['total_number_of_character'];
		$word = $result['total_number_of_word'];
	}


?>

<form action=""; method="post">
	<table>
		<tr>
			<td>Enter your string:</td>
			<td><input type="text" name="given_string"></td>
		</tr>
		<tr>
			<td>Total Number of Word</td>
			<td><input type="text" value="<?php echo $word; ?>"></td>
		</tr>
		<tr>
			<td>Total Number of Character</td>
			<td><input type="text" value="<?php echo $character; ?>" ></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn" value="Submit"></td>
		</tr>
	</table>

</form>