<?php
session_start();
	include_once 'data.php';
	include_once 'codes.php';

?>

<!DOCTYPE html>
<html>
<h2>SUCCESS</h2>
<h4>PURCHASE COMPLETED</h4>
<br>
<br>

<p><a href="welcome.php">Return to welcome page</a></p>

<?php

	if (isset($_POST['welcome'])) {
				header("Location: welcome.php");		
		}

?>
</html>
