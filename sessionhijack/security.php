<?php
	session_start();
	include_once 'data.php';
	include_once 'codes.php';
	
	if (isset($_POST['submit'])) {
		// echo "<p>" . $_POST['security'] . "</p>";
		// echo "<p>" . $data[$_SESSION['authuser']][3] . "</p>";
		if($_POST['security'] == $data[$_SESSION['authuser']][3]){
			//$_SESSION['authuser'] == $_POST['user'];
			header("Location: success.php");return;
		}
		// else{


		// 	session_unset();
		// 	session_destroy();	
		// 	header("Location: login.php");
			
		// }
	}
?>


<!DOCTYPE html>
<html>

<form method="post" id="form">
		<!--<input type="hidden" name="user" value="<?= $_GET['user']?>">-->
		<label for="security">Your pet's name? </label>
		<input type="text" name="security" id="security">
	</form><br><br>
	<button form="form" name="submit">Submit</button><br>




</html>

