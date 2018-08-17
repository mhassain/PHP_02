<?php
	require_once 'functions.php';
	
	if(isset($_POST['btn'])){
		
		$password = myPassword($_POST);
		echo $password;
	}

?>

<form action='' method='post'>

	<table>
	
		<tr>
			<td>Enter your password:</td>
			<td><input type='password' name='given_length'></td>
		</tr>
		<tr>
			<td></td>
			<td><input type='submit' name='btn' value='Submit'></td>
		</tr>
	
	</table>

</form>